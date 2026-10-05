<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityLogModel extends Model
{
    protected $table = 'tblVLCActivityLog';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
        'admin_id',
        'admin_name',
        'action',
        'module',
        'target_id',
        'target_member_id',
        'target_member_name',
        'description',
        'created_at'
    ];

    public static function log(
        string $action,
        string $module,
        string $description,
        ?string $targetId = null,
        ?int $targetMemberId = null,
        ?string $targetMemberName = null
    ): bool {
        try {
            $session = session();
            $adminId = (int)($session->get('admin_id') ?? $session->get('admin_user_id') ?? 1);
            $adminName = $session->get('admin_name') ?? $session->get('admin_fullname') ?? 'Administrator VLC';

            $model = new self();
            return (bool)$model->insert([
                'admin_id'           => $adminId,
                'admin_name'         => $adminName,
                'action'             => strtoupper($action),
                'module'             => strtolower($module),
                'target_id'          => $targetId,
                'target_member_id'   => $targetMemberId,
                'target_member_name' => $targetMemberName,
                'description'        => $description,
                'created_at'         => date('Y-m-d H:i:s')
            ]);
        } catch (\Throwable $e) {
            log_message('error', 'ActivityLog error: ' . $e->getMessage());
            return false;
        }
    }
}
