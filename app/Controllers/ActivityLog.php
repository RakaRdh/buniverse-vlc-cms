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

        $builder = $this->activityLogModel->orderBy('id', 'DESC');

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

        $logs = $builder->findAll(100);

        $data = [
            'title'   => 'Audit Activity Log Administrator',
            'logs'    => $logs,
            'module'  => $module,
            'action'  => $action,
            'keyword' => $keyword,
        ];

        return view('activity_log/index', $data);
    }
}
