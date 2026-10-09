<?php

namespace App\Controllers\Api;

use App\Models\MemberModel;
use App\Models\ProfileModel;

class Auth extends BaseApiController
{
    protected $memberModel;
    protected $profileModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
        $this->profileModel = new ProfileModel();
    }

    /**
     * POST /api/auth/login
     */
    public function login()
    {
        $email = strtolower(trim($this->request->getVar('email') ?? ''));
        $password = (string) ($this->request->getVar('password') ?? '');

        if (empty($email) || empty($password)) {
            return $this->respondFail('Email dan Password wajib diisi', 400);
        }

        $member = $this->memberModel->where('email', $email)->first();
        if (!$member) {
            return $this->respondFail('Email tidak terdaftar', 404);
        }

        if ($member['status'] === 'banned') {
            return $this->respondFail('Akun Anda sedang dinonaktifkan / dibanned', 403);
        }

        if ($member['status'] === 'inactive') {
            return $this->respondFail('Akun Anda belum aktif. Silakan periksa inbox email Anda untuk memverifikasi akun terlebih dahulu.', 403);
        }

        $isValid = MemberModel::verifyPassword($password, $member['password'], $member['salt'] ?? '');
        if (!$isValid) {
            return $this->respondFail('Password yang Anda masukkan salah', 401);
        }

        // Update last login
        $this->memberModel->update($member['memberID'], [
            'lastlogin' => date('Y-m-d H:i:s')
        ]);

        $profile = $this->profileModel->where('member_id', $member['memberID'])->first();

        // Remove sensitive fields from output
        unset($member['password'], $member['salt']);

        return $this->respondSuccess([
            'member'  => $member,
            'profile' => $profile
        ], 'Login berhasil');
    }

    /**
     * POST /api/auth/register
     */
    public function register()
    {
        $fullname = trim($this->request->getVar('fullname') ?? '');
        $email = strtolower(trim($this->request->getVar('email') ?? ''));
        $phone = trim($this->request->getVar('phone') ?? '');
        $password = (string) ($this->request->getVar('password') ?? '');
        $address = trim($this->request->getVar('address') ?? '');
        $newsletter = $this->request->getVar('newsletter');

        if (empty($fullname) || empty($email) || empty($phone) || empty($password)) {
            return $this->respondFail('Semua kolom bertanda bintang (*) wajib diisi', 400);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->respondFail('Format email tidak valid', 400);
        }

        if (strlen($password) < 6) {
            return $this->respondFail('Password minimal terdiri dari 6 karakter', 400);
        }

        $existing = $this->memberModel->where('email', $email)->first();
        if ($existing) {
            return $this->respondFail('Email ini sudah terdaftar. Silakan login.', 409);
        }

        $verifyToken = bin2hex(random_bytes(32));

        $db = \Config\Database::connect();
        $db->transBegin();

        try {
            $memberId = $this->memberModel->registerMember([
                'fullname'     => $fullname,
                'email'        => $email,
                'password'     => $password,
                'verify_token' => $verifyToken,
                'newsletter'   => !empty($newsletter) ? 1 : 0
            ]);

            if (!$memberId) {
                $db->transRollback();
                return $this->respondFail('Gagal membuat akun member', 500);
            }

            $this->profileModel->insert([
                'member_id' => $memberId,
                'phone'     => $phone,
                'address'   => $address
            ]);

            $db->transCommit();

            $member = $this->memberModel->find($memberId);
            $profile = $this->profileModel->where('member_id', $memberId)->first();

            // Send verification email via EmailService
            $emailService = new \App\Services\EmailService();
            $emailSent = $emailService->sendAccountVerificationEmail($email, $fullname, $verifyToken);

            unset($member['password'], $member['salt']);

            return $this->respondSuccess([
                'member'     => $member,
                'profile'    => $profile,
                'email_sent' => $emailSent
            ], 'Registrasi berhasil! Tautan verifikasi telah dikirimkan ke email Anda.', 201);
        } catch (\Exception $e) {
            $db->transRollback();
            return $this->respondFail('Terjadi kesalahan saat registrasi: ' . $e->getMessage(), 500);
        }
    }

    /**
     * POST /api/auth/verify
     */
    public function verify()
    {
        $token = trim($this->request->getVar('token') ?? '');
        $email = strtolower(trim($this->request->getVar('email') ?? ''));

        if (empty($token) || empty($email)) {
            return $this->respondFail('Token dan email verifikasi wajib diisi', 400);
        }

        $member = $this->memberModel->where('email', $email)->first();
        if (!$member) {
            return $this->respondFail('Akun tidak ditemukan', 404);
        }

        if ($member['status'] === 'active') {
            return $this->respondSuccess([
                'email'            => $email,
                'already_verified' => true
            ], 'Akun Anda sudah aktif dan terverifikasi sebelumnya. Silakan login.');
        }

        if (empty($member['verify_token']) || $member['verify_token'] !== $token) {
            return $this->respondFail('Tautan verifikasi tidak valid atau telah kedaluwarsa.', 400);
        }

        $this->memberModel->update($member['memberID'], [
            'status'       => 'active',
            'verify_token' => null
        ]);

        return $this->respondSuccess([
            'email' => $email
        ], 'Selamat! Email Anda berhasil diverifikasi. Akun Anda kini telah aktif.');
    }

    /**
     * POST /api/auth/resend-verification
     */
    public function resendVerification()
    {
        $email = strtolower(trim($this->request->getVar('email') ?? ''));
        if (empty($email)) {
            return $this->respondFail('Email wajib diisi', 400);
        }

        $member = $this->memberModel->where('email', $email)->first();
        if (!$member) {
            return $this->respondFail('Akun tidak ditemukan', 404);
        }

        if ($member['status'] === 'active') {
            return $this->respondFail('Akun ini sudah aktif dan terverifikasi. Silakan langsung login.', 400);
        }

        $verifyToken = bin2hex(random_bytes(32));
        $this->memberModel->update($member['memberID'], [
            'verify_token' => $verifyToken
        ]);

        $emailService = new \App\Services\EmailService();
        $emailSent = $emailService->sendAccountVerificationEmail($email, $member['fullname'], $verifyToken);

        return $this->respondSuccess([
            'email_sent' => $emailSent
        ], 'Tautan verifikasi baru telah dikirimkan ke email Anda.');
    }

    /**
     * GET/POST /api/auth/check-email
     */
    public function checkEmail()
    {
        $email = strtolower(trim($this->request->getVar('email') ?? ''));
        if (empty($email)) {
            return $this->respondFail('Email wajib diisi', 400);
        }

        $existing = $this->memberModel->where('email', $email)->first();
        if ($existing) {
            return $this->respondSuccess([
                'exists' => true,
                'status' => $existing['status'],
            ], 'Email sudah terdaftar. Silakan login atau gunakan email lain.');
        }

        return $this->respondSuccess([
            'exists' => false,
        ], 'Email tersedia.');
    }
}

