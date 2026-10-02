<?php

namespace App\Controllers;

use App\Models\MemberModel;
use App\Models\ProgramModel;
use App\Models\EnrollmentModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $memberModel = new MemberModel();
        $programModel = new ProgramModel();
        $enrollmentModel = new EnrollmentModel();

        $totalMembers = $memberModel->countAllResults();
        $activePrograms = $programModel->where('status', 'active')->countAllResults();
        $totalPrograms = $programModel->countAllResults();
        $totalEnrollments = $enrollmentModel->countAllResults();
        $completedEnrollments = $enrollmentModel->where('status', 'completed')->countAllResults();

        // Recent 5 enrollments
        $recentEnrollments = $enrollmentModel->getEnrollments(null, null, null);
        $recentEnrollments = array_slice($recentEnrollments, 0, 5);

        // Programs with counts
        $programsList = $programModel->getProgramsWithCounts();

        $data = [
            'title'                => 'Dashboard Overview',
            'totalMembers'         => $totalMembers,
            'activePrograms'       => $activePrograms,
            'totalPrograms'        => $totalPrograms,
            'totalEnrollments'     => $totalEnrollments,
            'completedEnrollments' => $completedEnrollments,
            'recentEnrollments'    => $recentEnrollments,
            'programsList'         => $programsList,
        ];

        return view('dashboard/index', $data);
    }
}
