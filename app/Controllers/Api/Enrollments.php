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

        // Check/update phone if provided
        $profile = $this->profileModel->where('member_id', $memberId)->first();
        if (!empty($phone)) {
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
                                          ->first();
        if ($existing && $existing['status'] === 'rejected') {
            return $this->respondFail('Pendaftaran Anda untuk program pelatihan ini telah ditolak oleh admin dan tidak dapat mendaftar kembali pada program ini.', 400);
        }

        $enrollment = $this->enrollmentModel->enrollMember($memberId, $programId, $notes);
        if (!$enrollment) {
            return $this->respondFail('Pendaftaran Anda untuk program pelatihan ini telah ditolak oleh admin dan tidak dapat mendaftar kembali pada program ini.', 400);
        }

        return $this->respondSuccess([
            'enrollment' => $enrollment,
            'program'    => $program
        ], 'Pendaftaran kelas berhasil', 201);
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
