<?php

namespace App\Controllers;

use App\Models\ProgramModel;
use App\Models\ProgramModuleModel;

class Programs extends BaseController
{
    protected $programModel;
    protected $moduleModel;

    public function __construct()
    {
        $this->programModel = new ProgramModel();
        $this->moduleModel = new ProgramModuleModel();
    }

    public function index()
    {
        $status = $this->request->getGet('status');
        $keyword = $this->request->getGet('q');

        $programs = $this->programModel->getProgramsWithCounts($status, $keyword);

        $data = [
            'title'    => 'Daftar Program Belajar',
            'programs' => $programs,
            'status'   => $status,
            'keyword'  => $keyword,
        ];

        return view('programs/index', $data);
    }

    public function new()
    {
        $data = [
            'title'   => 'Tambah Program Baru',
            'program' => null,
            'modules' => [],
        ];

        return view('programs/form', $data);
    }

    public function create()
    {
        $name = trim($this->request->getPost('name') ?? '');
        if (empty($name)) {
            return redirect()->back()->withInput()->with('error', 'Nama program wajib diisi.');
        }

        $slug = url_title($name, '-', true);
        // Check uniqueness of slug
        $existing = $this->programModel->where('slug', $slug)->first();
        if ($existing) {
            $slug .= '-' . time();
        }

        $insertData = [
            'name'             => $name,
            'slug'             => $slug,
            'short_desc'       => $this->request->getPost('short_desc'),
            'description'      => $this->request->getPost('description'),
            'price'            => (float) ($this->request->getPost('price') ?? 0),
            'duration'         => $this->request->getPost('duration'),
            'schedule_info'    => $this->request->getPost('schedule_info'),
            'max_participants' => $this->request->getPost('max_participants') ? (int)$this->request->getPost('max_participants') : null,
            'has_certificate'  => $this->request->getPost('has_certificate') ? 1 : 0,
            'status'           => $this->request->getPost('status') ?? 'draft',
            'image'            => $this->request->getPost('image') ?: '/img/img-course-1.webp',
            'created_by'       => session('admin_id'),
        ];

        $programId = $this->programModel->insert($insertData);

        return redirect()->to('/programs/edit/' . $programId)->with('success', 'Program berhasil dibuat! Sekarang Anda dapat menambahkan modul materi.');
    }

    public function edit($id = null)
    {
        $program = $this->programModel->find($id);
        if (!$program) {
            return redirect()->to('/programs')->with('error', 'Program tidak ditemukan.');
        }

        $modules = $this->moduleModel->getModulesByProgram($id);

        $data = [
            'title'   => 'Edit Program: ' . $program['name'],
            'program' => $program,
            'modules' => $modules,
        ];

        return view('programs/form', $data);
    }

    public function update($id = null)
    {
        $program = $this->programModel->find($id);
        if (!$program) {
            return redirect()->to('/programs')->with('error', 'Program tidak ditemukan.');
        }

        $name = trim($this->request->getPost('name') ?? '');
        if (empty($name)) {
            return redirect()->back()->withInput()->with('error', 'Nama program wajib diisi.');
        }

        $updateData = [
            'name'             => $name,
            'short_desc'       => $this->request->getPost('short_desc'),
            'description'      => $this->request->getPost('description'),
            'price'            => (float) ($this->request->getPost('price') ?? 0),
            'duration'         => $this->request->getPost('duration'),
            'schedule_info'    => $this->request->getPost('schedule_info'),
            'max_participants' => $this->request->getPost('max_participants') ? (int)$this->request->getPost('max_participants') : null,
            'has_certificate'  => $this->request->getPost('has_certificate') ? 1 : 0,
            'status'           => $this->request->getPost('status') ?? 'draft',
            'image'            => $this->request->getPost('image') ?: $program['image'],
        ];

        $this->programModel->update($id, $updateData);

        return redirect()->to('/programs/edit/' . $id)->with('success', 'Informasi program berhasil diperbarui.');
    }

    public function delete($id = null)
    {
        $program = $this->programModel->find($id);
        if (!$program) {
            return redirect()->to('/programs')->with('error', 'Program tidak ditemukan.');
        }

        // Delete associated modules
        $this->moduleModel->where('program_id', $id)->delete();
        $this->programModel->delete($id);

        return redirect()->to('/programs')->with('success', 'Program dan modulnya berhasil dihapus.');
    }

    public function addModule($programId = null)
    {
        $program = $this->programModel->find($programId);
        if (!$program) {
            return redirect()->to('/programs')->with('error', 'Program tidak ditemukan.');
        }

        $title = trim($this->request->getPost('module_title') ?? '');
        if (empty($title)) {
            return redirect()->back()->with('error', 'Judul modul wajib diisi.');
        }

        // Determine next sort order
        $currentMax = $this->moduleModel->where('program_id', $programId)->selectMax('sort_order')->first();
        $nextSort = ($currentMax['sort_order'] ?? 0) + 1;

        $this->moduleModel->insert([
            'program_id'       => $programId,
            'title'            => $title,
            'description'      => $this->request->getPost('module_description'),
            'duration_minutes' => (int) ($this->request->getPost('duration_minutes') ?? 45),
            'has_video'        => $this->request->getPost('has_video') ? 1 : 0,
            'video_url'        => $this->request->getPost('video_url'),
            'sort_order'       => $nextSort,
        ]);

        return redirect()->to('/programs/edit/' . $programId)->with('success', 'Modul berhasil ditambahkan.');
    }

    public function deleteModule($moduleId = null)
    {
        $module = $this->moduleModel->find($moduleId);
        if (!$module) {
            return redirect()->back()->with('error', 'Modul tidak ditemukan.');
        }

        $programId = $module['program_id'];
        $this->moduleModel->delete($moduleId);

        return redirect()->to('/programs/edit/' . $programId)->with('success', 'Modul berhasil dihapus.');
    }
}
