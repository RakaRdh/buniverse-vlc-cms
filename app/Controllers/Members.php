<?php

namespace App\Controllers;

use App\Models\MemberModel;

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
}
