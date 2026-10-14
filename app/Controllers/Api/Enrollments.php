<?php

namespace App\Controllers\Api;

use App\Models\EnrollmentModel;
use App\Models\ProgramModel;
use App\Models\MemberModel;
use App\Models\ProfileModel;

class Enrollments extends BaseApiController
{
    protected $enrollmentModel;
    protected $programModel;
    protected $memberModel;
    protected $profileModel;

    public function __construct()
    {
        $this->enrollmentModel = new EnrollmentModel();
        $this->programModel = new ProgramModel();
        $this->memberModel = new MemberModel();
        $this->profileModel = new ProfileModel();
    }

    /**
     * POST /api/enrollments
     */
    public function create()
    {
        $memberId = $this->request->getVar('member_id');
        $programId = $this->request->getVar('program_id');
        $phone = trim($this->request->getVar('phone') ?? '');
        $notes = $this->request->getVar('notes');

        if (empty($memberId) || empty($programId)) {
            return $this->respondFail('member_id dan program_id wajib diisi', 400);
        }

        $member = $this->memberModel->find($memberId);
        if (!$member) {
            return $this->respondFail('Member tidak ditemukan', 404);
        }

        $program = $this->programModel->find($programId);
        if (!$program) {
            return $this->respondFail('Program tidak ditemukan', 404);
        }

        // Check if program is already expired
        if (!empty($program['end_date']) && strtotime($program['end_date']) < strtotime('today')) {
            $formattedEnd = date('d M Y', strtotime($program['end_date']));
            return $this->respondFail("Pendaftaran untuk program ini telah ditutup karena periode kelas telah berakhir pada {$formattedEnd}.", 400);
        }

        // Check/update phone if provided
        $profile = $this->profileModel->where('member_id', $memberId)->first();
        if (!empty($phone)) {
            $phone = \App\Helpers\PhoneHelper::normalize($phone);
            if ($phone === false) {
                return $this->respondFail('Format nomor telepon tidak valid', 400);
            }
            $phoneValidation = \App\Helpers\PhoneHelper::validate($phone);
            if (!$phoneValidation['valid']) {
                return $this->respondFail($phoneValidation['message'], 400);
            }

            if ($profile) {
                $this->profileModel->update($profile['id'], ['phone' => $phone]);
            } else {
                $this->profileModel->insert([
                    'member_id' => $memberId,
                    'phone'     => $phone
                ]);
            }
        } elseif (empty($profile['phone'])) {
            return $this->respondFail('Nomor telepon / WhatsApp wajib dilengkapi untuk mendaftar kelas', 400);
        }

        $existing = $this->enrollmentModel->where('member_id', $memberId)
                                          ->where('program_id', $programId)
                                          ->orderBy('id', 'DESC')
                                          ->first();
        if ($existing && $existing['status'] === 'banned') {
            return $this->respondFail('Akun Anda tidak diizinkan (Banned) untuk mendaftar pada program pelatihan ini. Hubungi administrator untuk informasi lebih lanjut.', 403);
        }

        $enrollment = $this->enrollmentModel->enrollMember($memberId, $programId, $notes);
        if (!$enrollment) {
            return $this->respondFail('Akun Anda tidak diizinkan (Banned) untuk mendaftar pada program pelatihan ini.', 403);
        }

        // If returned existing active/pending enrollment, return descriptive message
        if ($existing && isset($enrollment['id']) && (int)$existing['id'] === (int)$enrollment['id']) {
            $statusMessages = [
                'active'      => 'Anda sudah terdaftar sebagai peserta aktif di kelas ini.',
                'waiting'     => 'Pendaftaran Anda sedang dalam antrean verifikasi admin.',
                'contacted'   => 'Tim admin sedang dalam proses menghubungi Anda untuk koordinasi kelas.',
                'in_progress' => 'Anda sedang aktif mengikuti program pelatihan ini.',
                'enrolled'    => 'Anda sudah terdaftar di kelas ini.',
            ];
            $msg = $statusMessages[$enrollment['status']] ?? 'Anda sudah terdaftar di kelas ini.';
            return $this->respondSuccess([
                'enrollment' => $enrollment,
                'program'    => $program
            ], $msg, 200);
        }

        // Send confirmation email when new enrollment is created
        if (!empty($member['email'])) {
            try {
                $emailService = new \App\Services\EmailService();
                $emailService->sendEnrollmentWaitingEmail($member['email'], $member['fullname'] ?? 'Peserta', $program);
            } catch (\Throwable $e) {
                log_message('error', 'Gagal kirim waiting email: ' . $e->getMessage());
            }
        }

        return $this->respondSuccess([
            'enrollment' => $enrollment,
            'program'    => $program
        ], 'Pendaftaran kelas berhasil dikirimkan!', 201);
    }

    /**
     * GET /api/enrollments/member/(:num)
     */
    public function byMember($memberId = null)
    {
        if (empty($memberId)) {
            return $this->respondFail('Member ID is required', 400);
        }

        $enrollments = $this->enrollmentModel->getEnrollmentsByMember($memberId);
        return $this->respondSuccess($enrollments, 'Enrollments fetched successfully');
    }
}
