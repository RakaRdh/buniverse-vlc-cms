<?php

namespace App\Controllers;

use App\Models\EnrollmentModel;
use App\Models\ProgramModel;

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
        $progress = (int) $this->request->getPost('progress');

        $updateData = [
            'status'   => $newStatus,
            'progress' => min(100, max(0, $progress)),
        ];

        if ($newStatus === 'completed' && empty($enrollment['completed_at'])) {
            $updateData['completed_at'] = date('Y-m-d H:i:s');
            $updateData['progress'] = 100;
        }

        $this->enrollmentModel->update($id, $updateData);

        return redirect()->to('/enrollments')->with('success', 'Status pendaftaran berhasil diperbarui.');
    }
}
