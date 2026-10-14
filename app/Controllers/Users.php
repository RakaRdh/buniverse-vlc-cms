<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ActivityLogModel;

class Users extends BaseController
{
    protected AdminModel $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    /**
     * Check if currently logged in admin is superadmin
     */
    protected function checkSuperadmin(): bool
    {
        $role = session()->get('admin_role') ?? 'admin';
        return ($role === 'superadmin');
    }

    /**
     * GET /users - List all VLC administrators
     */
    public function index()
    {
        if (!$this->checkSuperadmin()) {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak. Menu Pengelolaan Admin hanya dapat diakses oleh Superadmin.');
        }

        $keyword = trim($this->request->getGet('q') ?? '');
        $builder = $this->adminModel->orderBy('userID', 'ASC');

        if (!empty($keyword)) {
            $builder->groupStart()
                ->like('name', $keyword)
                ->orLike('userName', $keyword)
                ->orLike('email', $keyword)
                ->orLike('roleName', $keyword)
                ->groupEnd();
        }

        $users = $builder->findAll();

        $data = [
            'title'        => 'Kelola Admin VLC',
            'users'        => $users,
            'keyword'      => $keyword,
            'currentAdmin' => [
                'id'       => session()->get('admin_id'),
                'username' => session()->get('admin_username'),
                'role'     => session()->get('admin_role') ?? 'superadmin',
            ]
        ];

        return view('users/index', $data);
    }

    /**
     * POST /users/save - Create new VLC administrator
     */
    public function save()
    {
        if (!$this->checkSuperadmin()) {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak. Anda tidak memiliki izin untuk membuat akun admin.');
        }

        $name = trim($this->request->getPost('name') ?? '');
        $username = strtolower(trim($this->request->getPost('username') ?? ''));
        $email = strtolower(trim($this->request->getPost('email') ?? ''));
        $password = (string) $this->request->getPost('password');
        $role = strtolower(trim($this->request->getPost('role') ?? 'admin'));

        if (empty($name) || empty($username) || empty($email) || empty($password)) {
            return redirect()->back()->withInput()->with('error', 'Semua field wajib diisi.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->with('error', 'Format email tidak valid.');
        }

        if (strlen($password) < 6) {
            return redirect()->back()->withInput()->with('error', 'Password minimal 6 karakter.');
        }

        if (!in_array($role, ['superadmin', 'admin'], true)) {
            $role = 'admin';
        }

        // Check unique username or email
        $existing = $this->adminModel->groupStart()
            ->where('email', $email)
            ->orWhere('userName', $username)
            ->groupEnd()
            ->first();

        if ($existing) {
            return redirect()->back()->withInput()->with('error', 'Username atau Email sudah terdaftar sebagai Administrator.');
        }

        // Generate SHA-512 credential for admin
        $cred = AdminModel::generateHash($password, $email);
        $slug = url_title($name, '-', true);

        $newId = $this->adminModel->insert([
            'userName' => $username,
            'name'     => $name,
            'slug'     => $slug,
            'email'    => $email,
            'password' => $cred['hash'],
            'salt'     => $cred['salt'],
            'active'   => '1',
            'roleName' => $role
        ]);

        ActivityLogModel::log(
            'INSERT',
            'users',
            "Superadmin membuat akun admin baru: {$name} (@{$username}, Role: {$role})",
            (string)$newId,
            null,
            null
        );

        return redirect()->to('/users')->with('success', "Akun admin {$name} (@{$username}) dengan role '{$role}' berhasil dibuat.");
    }

    /**
     * POST /users/toggle-status/(:num)
     */
    public function toggleStatus($id)
    {
        if (!$this->checkSuperadmin()) {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak.');
        }

        $user = $this->adminModel->find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Akun admin tidak ditemukan.');
        }

        if ((int)$id === (int)session()->get('admin_id')) {
            return redirect()->back()->with('error', 'Anda tidak dapat menonaktifkan akun Anda sendiri.');
        }

        $newActive = ($user['active'] === '1') ? '0' : '1';
        $this->adminModel->update($id, ['active' => $newActive]);

        $statusLabel = ($newActive === '1') ? 'Diaktifkan' : 'Dinonaktifkan';

        ActivityLogModel::log(
            'STATUS_CHANGE',
            'users',
            "Superadmin mengubah status aktif akun {$user['name']} (@{$user['userName']}) menjadi {$statusLabel}",
            (string)$id,
            null,
            null
        );

        return redirect()->to('/users')->with('success', "Status akun {$user['name']} berhasil {$statusLabel}.");
    }

    /**
     * POST /users/delete/(:num)
     */
    public function delete($id)
    {
        if (!$this->checkSuperadmin()) {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak.');
        }

        $user = $this->adminModel->find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Akun admin tidak ditemukan.');
        }

        if ((int)$id === (int)session()->get('admin_id')) {
            return redirect()->back()->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $this->adminModel->delete($id);

        ActivityLogModel::log(
            'DELETE',
            'users',
            "Superadmin menghapus akun admin: {$user['name']} (@{$user['userName']})",
            (string)$id,
            null,
            null
        );

        return redirect()->to('/users')->with('success', "Akun admin {$user['name']} telah dihapus.");
    }
}
