<?php

namespace App\Controllers;

use App\Models\EnrollmentModel;
use App\Models\ProgramModel;
use App\Models\ActivityLogModel;

class Enrollments extends BaseController
{
    protected $enrollmentModel;
    protected $programModel;

    public function __construct()
    {
        $this->enrollmentModel = new EnrollmentModel();
        $this->programModel = new ProgramModel();
    }

    public function index()
    {
        $programId = $this->request->getGet('program_id');
        $status = $this->request->getGet('status');
        $keyword = $this->request->getGet('q');

        $enrollments = $this->enrollmentModel->getEnrollments($programId, $status, $keyword);
        $programs = $this->programModel->findAll();

        $data = [
            'title'       => 'Data Enrollment Peserta',
            'enrollments' => $enrollments,
            'programs'    => $programs,
            'programId'   => $programId,
            'status'      => $status,
            'keyword'     => $keyword,
        ];

        return view('enrollments/index', $data);
    }

    public function updateStatus($id = null)
    {
        $enrollment = $this->enrollmentModel->find($id);
        if (!$enrollment) {
            return redirect()->to('/enrollments')->with('error', 'Data enrollment tidak ditemukan.');
        }

        $newStatus = $this->request->getPost('status');
        $allowedStatuses = ['waiting', 'contacted', 'active', 'finished', 'rejected', 'banned', 'enrolled', 'in_progress'];

        if (!in_array($newStatus, $allowedStatuses, true)) {
            return redirect()->to('/enrollments')->with('error', 'Status pendaftaran tidak valid.');
        }

        $oldStatus = $enrollment['status'];

        $updateData = [
            'status' => $newStatus,
        ];

        if ($newStatus === 'finished' && empty($enrollment['completed_at'])) {
            $updateData['completed_at'] = date('Y-m-d H:i:s');
        } elseif ($newStatus !== 'finished') {
            $updateData['completed_at'] = null;
        }

        $this->enrollmentModel->update($id, $updateData);

        // Fetch participant & program names for descriptive audit log & email
        $enrollmentDetails = $this->enrollmentModel->getEnrollments(null, null, null);
        $itemDetail = array_values(array_filter($enrollmentDetails, fn($row) => (int)$row['id'] === (int)$id))[0] ?? null;
        $memberName = $itemDetail['member_name'] ?? ('Member #' . $enrollment['member_id']);
        $memberEmail = $itemDetail['member_email'] ?? null;
        $programName = $itemDetail['program_name'] ?? ('Program #' . $enrollment['program_id']);

        // Send email notifications via EmailService
        if (!empty($memberEmail)) {
            $emailService = new \App\Services\EmailService();
            $programData = $this->programModel->find($enrollment['program_id']) ?: ['name' => $programName];

            if ($newStatus === 'active' && $oldStatus !== 'active') {
                $emailService->sendEnrollmentApprovedEmail($memberEmail, $memberName, $programData);
            } elseif ($newStatus === 'rejected' && $oldStatus !== 'rejected') {
                $emailService->sendEnrollmentRejectedEmail($memberEmail, $memberName, $programData);
            }
        }

        $this->purgeAllCache();

        ActivityLogModel::log(
            'STATUS_CHANGE',
            'enrollments',
            "Mengubah status pendaftaran {$memberName} ({$programName}) dari '{$oldStatus}' menjadi '{$newStatus}'",
            (string)$id,
            (int)$enrollment['member_id'],
            $memberName
        );

        $statusMessage = match($newStatus) {
            'active'    => 'Active (Terverifikasi - Email Disetujui Terkirim)',
            'rejected'  => 'Rejected (Ditolak)',
            'banned'    => 'Banned (Diblokir - Peserta dilarang mendaftar program ini)',
            'contacted' => 'Contacted (Sudah Dihubungi)',
            'finished'  => 'Finished (Selesai)',
            default     => ucfirst($newStatus)
        };

        return redirect()->to('/enrollments')->with('success', "Status pendaftaran {$memberName} berhasil diubah menjadi '{$statusMessage}'.");
    }

    /**
     * AJAX: Check if Datasatu member exists by email
     */
    public function checkMember()
    {
        $email = strtolower(trim($this->request->getPost('email') ?? ''));
        if (empty($email)) {
            return $this->response->setJSON(['success' => false, 'message' => 'Email wajib diisi.']);
        }

        $memberModel = new \App\Models\MemberModel();
        $profileModel = new \App\Models\ProfileModel();

        $member = $memberModel->where('email', $email)->first();
        if (!$member) {
            return $this->response->setJSON(['success' => false, 'message' => 'Akun dengan email tersebut belum terdaftar di database Datasatu.']);
        }

        $profile = $profileModel->where('member_id', $member['memberID'])->first();

        return $this->response->setJSON([
            'success' => true,
            'data'    => [
                'member_id' => $member['memberID'],
                'fullname'  => $member['fullname'],
                'email'     => $member['email'],
                'phone'     => $profile['phone'] ?? '',
                'status'    => $member['status'],
            ]
        ]);
    }

    /**
     * POST: Admin Manual Registration & Enrollment (auto-verified)
     */
    public function manualEnroll()
    {
        $mode = $this->request->getPost('mode') ?? 'existing'; // 'existing' or 'new'
        $programId = (int)$this->request->getPost('program_id');
        $enrollStatus = $this->request->getPost('enroll_status') ?? 'active';

        $program = $this->programModel->find($programId);
        if (!$program) {
            return redirect()->to('/enrollments')->with('error', 'Program pelatihan tidak ditemukan.');
        }

        $memberModel = new \App\Models\MemberModel();
        $profileModel = new \App\Models\ProfileModel();
        $memberId = null;
        $memberName = '';
        $memberEmail = '';

        if ($mode === 'existing') {
            $memberId = (int)$this->request->getPost('member_id');
            $member = $memberModel->find($memberId);
            if (!$member) {
                return redirect()->to('/enrollments')->with('error', 'Akun member tidak ditemukan.');
            }
            $memberName = $member['fullname'];
            $memberEmail = $member['email'];

            // Update / add phone number if provided
            $phone = trim($this->request->getPost('phone') ?? '');
            if (!empty($phone)) {
                $profile = $profileModel->where('member_id', $memberId)->first();
                if ($profile) {
                    $profileModel->update($profile['id'], ['phone' => $phone]);
                } else {
                    $profileModel->insert([
                        'member_id' => $memberId,
                        'phone'     => $phone
                    ]);
                }
            }
        } else {
            // Full new registration
            $fullname = trim($this->request->getPost('fullname') ?? '');
            $email = strtolower(trim($this->request->getPost('email') ?? ''));
            $phone = trim($this->request->getPost('phone') ?? '');
            $password = $this->request->getPost('password') ?: 'Datasatu123!';

            if (empty($fullname) || empty($email)) {
                return redirect()->to('/enrollments')->with('error', 'Nama lengkap dan email wajib diisi.');
            }

            // Check if email already taken
            $existingMember = $memberModel->where('email', $email)->first();
            if ($existingMember) {
                return redirect()->to('/enrollments')->with('error', 'Email tersebut sudah terdaftar di sistem. Silakan gunakan opsi akun Datasatu yang sudah ada.');
            }

            // Generate password hash
            $hashData = \App\Models\MemberModel::generateHash($password, $email);

            // Register auto-verified (status: active, email verifikasi auto bypass)
            $memberId = $memberModel->insert([
                'fullname'     => $fullname,
                'email'        => $email,
                'password'     => $hashData['hash'],
                'salt'         => $hashData['salt'],
                'status'       => 'active', // Auto verified
                'verify_token' => bin2hex(random_bytes(16)),
                'signupdate'   => date('Y-m-d H:i:s'),
                'reg_source'   => 'cms_admin_manual',
                'reg_media'    => 'admin_vlc',
            ]);

            $memberName = $fullname;
            $memberEmail = $email;

            // Save phone to tblprofile
            if (!empty($phone)) {
                $profileModel->insert([
                    'member_id' => $memberId,
                    'phone'     => $phone,
                ]);
            }
        }

        // Check if member already enrolled
        $existingEnroll = $this->enrollmentModel->where('member_id', $memberId)
                                                ->where('program_id', $programId)
                                                ->first();

        if ($existingEnroll) {
            if ($existingEnroll['status'] === 'banned') {
                return redirect()->to('/enrollments')->with('error', "Peserta {$memberName} saat ini berstatus Banned pada program ini.");
            }
            // Update to chosen status
            $this->enrollmentModel->update($existingEnroll['id'], [
                'status' => $enrollStatus,
                'notes'  => 'Di-assign / diperbarui manual oleh Admin CMS'
            ]);
        } else {
            // Insert new enrollment
            $this->enrollmentModel->insert([
                'member_id'   => $memberId,
                'program_id'  => $programId,
                'status'      => $enrollStatus,
                'enrolled_at' => date('Y-m-d H:i:s'),
                'notes'       => 'Didaftarkan manual oleh Admin CMS'
            ]);
        }

        $this->purgeAllCache();

        ActivityLogModel::log(
            'MANUAL_ENROLL',
            'enrollments',
            "Admin mendaftarkan & meng-assign peserta: {$memberName} ke program {$program['name']} (Status: {$enrollStatus})",
            (string)$programId,
            (int)$memberId,
            $memberName
        );

        return redirect()->to('/enrollments')->with('success', "Peserta {$memberName} berhasil didaftarkan dan di-assign ke kelas {$program['name']} dengan status '{$enrollStatus}'.");
    }
}
