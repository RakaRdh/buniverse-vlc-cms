<?php

namespace App\Controllers;

use App\Models\MemberModel;
use App\Models\EnrollmentModel;
use App\Models\ActivityLogModel;

class Members extends BaseController
{
    protected $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function index()
    {
        $status = $this->request->getGet('status');
        $keyword = $this->request->getGet('q');

        $members = $this->memberModel->getMembersWithProfiles($status, $keyword);

        $data = [
            'title'   => 'Data Member & Peserta',
            'members' => $members,
            'status'  => $status,
            'keyword' => $keyword,
        ];

        return view('members/index', $data);
    }

    public function detail($id = null)
    {
        $member = $this->memberModel->getMemberDetail($id);
        if (!$member) {
            return redirect()->to('/members')->with('error', 'Data member tidak ditemukan.');
        }

        $enrollmentModel = new EnrollmentModel();
        $enrollments = $enrollmentModel->getEnrollmentsByMember($id);

        $activityLogModel = new ActivityLogModel();
        $logs = $activityLogModel->where('target_member_id', $id)->orderBy('id', 'DESC')->findAll(15);

        $data = [
            'title'       => 'Detail Member: ' . ($member['fullname'] ?? ('Peserta #' . $member['memberID'])),
            'member'      => $member,
            'enrollments' => $enrollments,
            'logs'        => $logs,
        ];

        return view('members/detail', $data);
    }
}
