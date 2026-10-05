<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ActivityLogModel;

class Profile extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        $adminId = session()->get('admin_id');
        $admin = $this->adminModel->find($adminId);

        if (!$admin) {
            return redirect()->to('/login')->with('error', 'Sesi login tidak valid.');
        }

        $data = [
            'title' => 'Profil Administrator',
            'admin' => $admin,
        ];

        return view('profile/index', $data);
    }

    public function updatePassword()
    {
        $adminId = session()->get('admin_id');
        $admin = $this->adminModel->find($adminId);

        if (!$admin) {
            return redirect()->to('/login')->with('error', 'Sesi login tidak valid.');
        }

        $currentPassword = (string) $this->request->getPost('current_password');
        $newPassword = (string) $this->request->getPost('new_password');
        $confirmPassword = (string) $this->request->getPost('confirm_password');

        if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
            return redirect()->back()->with('error', 'Semua kolom password wajib diisi.');
        }

        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'Konfirmasi password baru tidak cocok.');
        }

        if (strlen($newPassword) < 6) {
            return redirect()->back()->with('error', 'Password baru minimal harus 6 karakter.');
        }

        // Verify current password
        $isValid = AdminModel::verifyPassword($currentPassword, $admin['password'], $admin['salt'] ?? '');
        if (!$isValid) {
            return redirect()->back()->with('error', 'Password saat ini yang Anda masukkan salah.');
        }

        // Generate new hash & salt
        $cred = AdminModel::generateHash($newPassword, $admin['email']);

        $this->adminModel->update($adminId, [
            'password' => $cred['hash'],
            'salt'     => $cred['salt'],
        ]);

        ActivityLogModel::log(
            'PASSWORD_CHANGE',
            'profile',
            'Administrator ' . ($admin['name'] ?? $admin['userName']) . ' berhasil memperbarui password'
        );

        return redirect()->to('/profile')->with('success', 'Password Anda berhasil diperbarui.');
    }
}
