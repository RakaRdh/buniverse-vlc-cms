<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        // Ensure at least one default superadmin exists
        $this->adminModel->ensureDefaultAdmin();
    }

    public function login()
    {
        if (session()->get('admin_logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    public function attemptLogin()
    {
        $email = trim($this->request->getPost('email') ?? '');
        $password = (string) $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()->withInput()->with('error', 'Email dan password wajib diisi.');
        }

        $admin = $this->adminModel->where('email', $email)->first();

        if (!$admin) {
            // Also try username
            $admin = $this->adminModel->where('userName', $email)->first();
        }

        if (!$admin) {
            return redirect()->back()->withInput()->with('error', 'Akun administrator tidak ditemukan.');
        }

        if ($admin['active'] !== '1') {
            return redirect()->back()->withInput()->with('error', 'Akun dinonaktifkan. Hubungi superadmin.');
        }

        // Verify password using SHA-512 + salt + pepper pattern
        $isValid = AdminModel::verifyPassword($password, $admin['password'], $admin['salt'] ?? '');

        if (!$isValid) {
            return redirect()->back()->withInput()->with('error', 'Password yang Anda masukkan salah.');
        }

        // Update last login
        $this->adminModel->update($admin['userID'], [
            'lastLogin' => date('Y-m-d H:i:s')
        ]);

        session()->set([
            'admin_logged_in' => true,
            'admin_id'        => $admin['userID'],
            'admin_name'      => $admin['name'] ?? $admin['userName'],
            'admin_email'     => $admin['email'],
            'admin_role'      => $admin['roleName'] ?? 'superadmin',
        ]);

        \App\Models\ActivityLogModel::log(
            'LOGIN',
            'auth',
            'Admin ' . ($admin['name'] ?? $admin['userName']) . ' berhasil login ke sistem'
        );

        return redirect()->to('/dashboard')->with('success', 'Selamat datang kembali, ' . ($admin['name'] ?? 'Admin') . '!');
    }

    public function logout()
    {
        $adminName = session()->get('admin_name');
        if ($adminName) {
            \App\Models\ActivityLogModel::log('LOGOUT', 'auth', 'Admin ' . $adminName . ' melakukan logout');
        }
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
