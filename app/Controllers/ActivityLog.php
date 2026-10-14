<?php

namespace App\Controllers;

use App\Models\ActivityLogModel;

class ActivityLog extends BaseController
{
    protected $activityLogModel;

    public function __construct()
    {
        $this->activityLogModel = new ActivityLogModel();
    }

    public function index()
    {
        // Restrict role: Only superadmin can access
        $adminRole = session()->get('admin_role') ?? 'admin';
        if ($adminRole !== 'superadmin') {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak. Menu Activity Log hanya dapat diakses oleh Superadmin.');
        }

        $module = $this->request->getGet('module');
        $action = $this->request->getGet('action');
        $keyword = $this->request->getGet('q');

        // Per page filter: 50, 100, 150, 200 (default 50)
        $allowedPerPage = [50, 100, 150, 200];
        $perPage = (int) ($this->request->getGet('per_page') ?? 50);
        if (!in_array($perPage, $allowedPerPage, true)) {
            $perPage = 50;
        }

        // Sort column & direction (3-state: default -> asc -> desc -> default)
        $rawSortCol = $this->request->getGet('sort');
        $rawSortDir = $this->request->getGet('dir');

        $allowedSortCols = ['id', 'created_at', 'admin_name', 'action', 'module', 'target_member_name'];
        if (!empty($rawSortCol) && in_array($rawSortCol, $allowedSortCols, true) && in_array($rawSortDir, ['asc', 'desc'], true)) {
            $sortCol = $rawSortCol;
            $sortDir = strtolower($rawSortDir);
        } else {
            // Default sort
            $sortCol = 'id';
            $sortDir = 'desc';
        }

        $builder = $this->activityLogModel->orderBy($sortCol, $sortDir);

        if (!empty($module)) {
            $builder->where('module', $module);
        }

        if (!empty($action)) {
            $builder->where('action', $action);
        }

        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('admin_name', $keyword)
                ->orLike('description', $keyword)
                ->orLike('target_member_name', $keyword)
                ->groupEnd();
        }

        $logs = $builder->paginate($perPage);
        $pager = $this->activityLogModel->pager;

        $data = [
            'title'    => 'Audit Activity Log Administrator',
            'logs'     => $logs,
            'pager'    => $pager,
            'module'   => $module,
            'action'   => $action,
            'keyword'  => $keyword,
            'perPage'  => $perPage,
            'sortCol'  => $sortCol,
            'sortDir'  => $sortDir,
        ];

        return view('activity_log/index', $data);
    }
}
