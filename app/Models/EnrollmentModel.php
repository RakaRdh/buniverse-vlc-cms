<?php

namespace App\Models;

use CodeIgniter\Model;

class EnrollmentModel extends Model
{
    protected $table = 'tblprogram_enrollment';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'member_id',
        'program_id',
        'status',
        'enrolled_at',
        'completed_at',
        'notes'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getEnrollments($programId = null, $status = null, $keyword = null)
    {
        $builder = $this->db->table('tblprogram_enrollment e')
            ->select('e.*, 
                      m.fullname as member_name, 
                      m.email as member_email, 
                      p.phone as member_phone,
                      pr.name as program_name, 
                      pr.slug as program_slug')
            ->join('tblmember m', 'm.memberID = e.member_id', 'left')
            ->join('tblprofile p', 'p.member_id = e.member_id', 'left')
            ->join('tblprogram pr', 'pr.id = e.program_id', 'left')
            ->orderBy('e.id', 'DESC');

        if (!empty($programId)) {
            $builder->where('e.program_id', $programId);
        }

        if (!empty($status)) {
            $builder->where('e.status', $status);
        }

        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('m.fullname', $keyword)
                ->orLike('m.email', $keyword)
                ->orLike('pr.name', $keyword)
                ->groupEnd();
        }

        return $builder->get()->getResultArray();
    }

    public function getEnrollmentsByMember($memberId)
    {
        return $this->db->table('tblprogram_enrollment e')
            ->select('e.*, pr.name as program_name, pr.slug as program_slug, pr.schedule_info as batch_info, pr.image, pr.price, pr.status as program_status')
            ->join('tblprogram pr', 'pr.id = e.program_id', 'left')
            ->where('e.member_id', $memberId)
            ->orderBy('e.id', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function enrollMember($memberId, $programId, $notes = null)
    {
        $existing = $this->where('member_id', $memberId)
                         ->where('program_id', $programId)
                         ->first();

        if ($existing) {
            if ($existing['status'] === 'rejected') {
                $this->update($existing['id'], [
                    'status'      => 'waiting',
                    'enrolled_at' => date('Y-m-d H:i:s'),
                    'notes'       => $notes
                ]);
                return $this->find($existing['id']);
            }
            return $existing;
        }

        $id = $this->insert([
            'member_id'   => $memberId,
            'program_id'  => $programId,
            'status'      => 'waiting',
            'enrolled_at' => date('Y-m-d H:i:s'),
            'notes'       => $notes
        ]);

        return $this->find($id);
    }
}
