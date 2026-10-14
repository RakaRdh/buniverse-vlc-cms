<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'tblmember';
    protected $primaryKey = 'memberID';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
        'password',
        'email',
        'fullname',
        'signupdate',
        'lastlogin',
        'status',
        'salt',
        'verify_token',
        'newsletter',
        'reg_source',
        'reg_media'
    ];

    public static function generateHash(string $password, string $email = ''): array
    {
        // 16-character / 32-hex random salt for standard sha256 ($salt . $password)
        $salt = bin2hex(random_bytes(16));
        $hash = hash('sha256', $salt . $password);
        return ['salt' => $salt, 'hash' => $hash];
    }

    public static function verifyPassword(string $password, string $storedHash, string $salt = '', string $email = ''): bool
    {
        if (empty($storedHash)) {
            return false;
        }

        // 1. Primary: SHA-256 ($salt . $password)
        if (!empty($salt) && hash_equals($storedHash, hash('sha256', $salt . $password))) {
            return true;
        }

        // 2. Fallback Variant A: SHA-256 ($password . $salt)
        if (!empty($salt) && hash_equals($storedHash, hash('sha256', $password . $salt))) {
            return true;
        }

        // 3. Fallback Variant B: Pure SHA-256 ($password)
        if (hash_equals($storedHash, hash('sha256', $password))) {
            return true;
        }

        // 4. Fallback Variant C: Legacy VLC SHA-512 + pepper
        if (!empty($salt)) {
            $pepper = 'B3!21t454t03';
            if (hash_equals($storedHash, hash('sha512', $salt . $pepper . $password . $salt))) {
                return true;
            }
        }

        // 5. Fallback Variant D: Deterministik legacy SHA-512 jika email disertakan
        if (!empty($email)) {
            $cleanEmail = strtolower(trim($email));
            $detSalt = hash('sha512', '[' . $cleanEmail . '>|<' . $password . ']');
            $detHash = hash('sha512', $detSalt . 'B3!21t454t03' . $password . $detSalt);
            if (hash_equals($storedHash, $detHash)) {
                return true;
            }
        }

        return false;
    }

    public function registerMember(array $data): int|string|false
    {
        $email = strtolower(trim($data['email']));
        $hashData = self::generateHash($data['password'], $email);

        $verifyToken = !empty($data['verify_token']) ? $data['verify_token'] : bin2hex(random_bytes(32));

        $memberData = [
            'fullname'     => trim($data['fullname']),
            'email'        => $email,
            'password'     => $hashData['hash'],
            'salt'         => $hashData['salt'],
            'status'       => 'inactive',
            'verify_token' => $verifyToken,
            'signupdate'   => date('Y-m-d H:i:s'),
            'lastlogin'    => null,
            'reg_source'   => 'web_vlc',
            'reg_media'    => 'frontend',
            'newsletter'   => !empty($data['newsletter']) ? 1 : 0,
        ];

        return $this->insert($memberData);
    }

    public function getMembersWithProfiles($status = null, $keyword = null)
    {
        $builder = $this->db->table('tblmember m')
            ->select('m.memberID, 
                      COALESCE(m.fullname, CONCAT("Peserta #", m.memberID)) as fullname, 
                      COALESCE(m.email, "-") as email, 
                      COALESCE(m.status, "active") as status, 
                      m.signupdate, 
                      m.lastlogin,
                      p.phone, p.address,
                      COUNT(DISTINCT CASE WHEN e.status IN ("active", "in_progress") THEN e.id END) as enrolled_count')
            ->join('tblprofile p', 'p.member_id = m.memberID', 'left')
            ->join('tblprogram_enrollment e', 'e.member_id = m.memberID', 'left')
            ->groupBy('m.memberID')
            ->orderBy('m.memberID', 'DESC');

        if (!empty($status)) {
            $builder->where('m.status', $status);
        }

        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('m.fullname', $keyword)
                ->orLike('m.email', $keyword)
                ->orLike('p.phone', $keyword)
                ->groupEnd();
        }

        return $builder->get()->getResultArray();
    }

    public function getMemberDetail($memberId)
    {
        return $this->db->table('tblmember m')
            ->select('m.memberID, m.fullname, m.email, m.status, m.signupdate, m.lastlogin, m.reg_source, m.reg_media,
                      p.phone, p.address, p.created_at as profile_created_at, p.updated_at as profile_updated_at')
            ->join('tblprofile p', 'p.member_id = m.memberID', 'left')
            ->where('m.memberID', $memberId)
            ->get()
            ->getRowArray();
    }
}
