<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model
{
    protected $table = 'tblprogram';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'name',
        'slug',
        'description',
        'short_desc',
        'image',
        'price',
        'duration',
        'schedule_info',
        'max_participants',
        'has_certificate',
        'status',
        'start_date',
        'end_date',
        'created_by'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getProgramsWithCounts($status = null, $keyword = null)
    {
        $builder = $this->db->table('tblprogram p')
            ->select('p.*, 
                      COUNT(DISTINCT m.id) as modules_count, 
                      COUNT(DISTINCT e.id) as enrollments_count')
            ->join('tblprogram_module m', 'm.program_id = p.id', 'left')
            ->join('tblprogram_enrollment e', 'e.program_id = p.id', 'left')
            ->groupBy('p.id')
            ->orderBy('p.id', 'DESC');

        if (!empty($status)) {
            $builder->where('p.status', $status);
        }

        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('p.name', $keyword)
                ->orLike('p.description', $keyword)
                ->groupEnd();
        }

        return $builder->get()->getResultArray();
    }
}
