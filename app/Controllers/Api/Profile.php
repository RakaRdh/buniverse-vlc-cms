<?php

namespace App\Controllers\Api;

use App\Models\MemberModel;
use App\Models\ProfileModel;
use App\Models\EnrollmentModel;

class Profile extends BaseApiController
{
    protected $memberModel;
    protected $profileModel;
    protected $enrollmentModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
        $this->profileModel = new ProfileModel();
        $this->enrollmentModel = new EnrollmentModel();
    }

    /**
     * GET /api/profile/(:num)
     */
    public function show($memberId = null)
    {
        if (empty($memberId)) {
            return $this->respondFail('Member ID is required', 400);
        }

        $member = $this->memberModel->find($memberId);
        if (!$member) {
            return $this->respondFail('Member not found', 404);
        }

        unset($member['password'], $member['salt']);

        $profile = $this->profileModel->where('member_id', $memberId)->first();
        $enrollments = $this->enrollmentModel->getEnrollmentsByMember($memberId);

        return $this->respondSuccess([
            'member'      => $member,
            'profile'     => $profile,
            'enrollments' => $enrollments
        ], 'Profile fetched successfully');
    }

    /**
     * POST /api/profile/(:num)
     */
    public function update($memberId = null)
    {
        if (empty($memberId)) {
            return $this->respondFail('Member ID is required', 400);
        }

        $member = $this->memberModel->find($memberId);
        if (!$member) {
            return $this->respondFail('Member not found', 404);
        }

        $fullname = trim($this->request->getVar('fullname') ?? '');
        $phone = trim($this->request->getVar('phone') ?? '');
        $address = trim($this->request->getVar('address') ?? '');

        if (empty($fullname)) {
            return $this->respondFail('Nama lengkap tidak boleh kosong', 400);
        }

        if (empty($phone)) {
            return $this->respondFail('Nomor WhatsApp / Telepon tidak boleh kosong', 400);
        }

        $db = \Config\Database::connect();
        $db->transBegin();

        try {
            $this->memberModel->update($memberId, [
                'fullname' => $fullname
            ]);

            $existingProfile = $this->profileModel->where('member_id', $memberId)->first();
            if ($existingProfile) {
                $this->profileModel->update($existingProfile['id'], [
                    'phone'   => $phone,
                    'address' => $address
                ]);
            } else {
                $this->profileModel->insert([
                    'member_id' => $memberId,
                    'phone'     => $phone,
                    'address'   => $address
                ]);
            }

            $db->transCommit();

            $updatedMember = $this->memberModel->find($memberId);
            $updatedProfile = $this->profileModel->where('member_id', $memberId)->first();
            unset($updatedMember['password'], $updatedMember['salt']);

            return $this->respondSuccess([
                'member'  => $updatedMember,
                'profile' => $updatedProfile
            ], 'Profil berhasil diperbarui');
        } catch (\Exception $e) {
            $db->transRollback();
            return $this->respondFail('Gagal memperbarui profil: ' . $e->getMessage(), 500);
        }
    }
}
