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
        $allowedStatuses = ['enrolled', 'contacted', 'in_progress', 'finished'];

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

        // Fetch participant & program names for descriptive audit log
        $enrollmentDetails = $this->enrollmentModel->getEnrollments(null, null, null);
        $itemDetail = array_values(array_filter($enrollmentDetails, fn($row) => (int)$row['id'] === (int)$id))[0] ?? null;
        $memberName = $itemDetail['member_name'] ?? ('Member #' . $enrollment['member_id']);
        $programName = $itemDetail['program_name'] ?? ('Program #' . $enrollment['program_id']);

        ActivityLogModel::log(
            'STATUS_CHANGE',
            'enrollments',
            "Mengubah status pendaftaran {$memberName} ({$programName}) dari '{$oldStatus}' menjadi '{$newStatus}'",
            (string)$id,
            (int)$enrollment['member_id'],
            $memberName
        );

        return redirect()->to('/enrollments')->with('success', "Status pendaftaran {$memberName} berhasil diubah menjadi '" . ucfirst(str_replace('_', ' ', $newStatus)) . "'.");
    }
}
