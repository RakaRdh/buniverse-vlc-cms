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

    public function getMembersWithProfiles($status = null, $keyword = null)
    {
        $builder = $this->db->table('tblmember m')
            ->select('m.memberID, m.fullname, m.email, m.status, m.signupdate, m.lastlogin,
                      p.phone, p.address,
                      COUNT(e.id) as enrolled_count')
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
