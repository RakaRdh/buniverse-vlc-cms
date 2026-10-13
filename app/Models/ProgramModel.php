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
        'modules',
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

    public function getActivePrograms()
    {
        $programs = $this->where('status', 'active')
                         ->orderBy('id', 'DESC')
                         ->findAll();

        foreach ($programs as &$p) {
            $manualModules = (!empty($p['modules']) && is_numeric($p['modules']) && (int)$p['modules'] > 0) ? (int)$p['modules'] : 0;
            if ($manualModules > 0) {
                $p['modules_count'] = $manualModules;
            } else {
                $count = $this->db->table('tblprogram_module')
                    ->where('program_id', $p['id'])
                    ->countAllResults();
                $p['modules_count'] = $count;
            }

            // Hitung peserta yang statusnya active / in_progress (distinct member)
            $activeCountRow = $this->db->table('tblprogram_enrollment')
                ->select('COUNT(DISTINCT member_id) as total')
                ->where('program_id', $p['id'])
                ->whereIn('status', ['active', 'in_progress'])
                ->get()
                ->getRow();
            $activeCount = !empty($activeCountRow) ? (int)$activeCountRow->total : 0;
            $p['active_participants_count'] = $activeCount;
            $maxCap = !empty($p['max_participants']) ? (int)$p['max_participants'] : 0;
            $p['is_full'] = ($maxCap > 0 && $activeCount >= $maxCap);
        }

        return $programs;
    }

    public function getProgramWithModules($slugOrId)
    {
        $program = is_numeric($slugOrId)
            ? $this->find($slugOrId)
            : $this->where('slug', $slugOrId)->first();

        if (!$program) {
            return null;
        }

        $manualModules = (!empty($program['modules']) && is_numeric($program['modules']) && (int)$program['modules'] > 0)
            ? (int)$program['modules']
            : 0;

        $modules = $this->db->table('tblprogram_module')
            ->where('program_id', $program['id'])
            ->orderBy('sort_order', 'ASC')
            ->get()
            ->getResultArray();

        $program['manual_modules'] = $manualModules;
        $program['modules_items'] = $modules;
        $program['modules'] = $modules;
        $program['modules_count'] = $manualModules > 0 ? $manualModules : count($modules);

        // Hitung peserta aktif (distinct member)
        $activeCountRow = $this->db->table('tblprogram_enrollment')
            ->select('COUNT(DISTINCT member_id) as total')
            ->where('program_id', $program['id'])
            ->whereIn('status', ['active', 'in_progress'])
            ->get()
            ->getRow();
        $activeCount = !empty($activeCountRow) ? (int)$activeCountRow->total : 0;
        $program['active_participants_count'] = $activeCount;
        $maxCap = !empty($program['max_participants']) ? (int)$program['max_participants'] : 0;
        $program['is_full'] = ($maxCap > 0 && $activeCount >= $maxCap);

        return $program;
    }

    public function getProgramsWithCounts($status = null, $keyword = null)
    {
        $builder = $this->db->table('tblprogram p')
            ->select('p.*, 
                      IF(p.modules > 0, p.modules, COUNT(DISTINCT m.id)) as modules_count, 
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
