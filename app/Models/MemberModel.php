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
                      p.phone, p.university, p.major, p.job, p.company,
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
}
