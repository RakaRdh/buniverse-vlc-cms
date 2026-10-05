<?php

namespace App\Controllers;

use App\Models\FaqModel;
use App\Models\ActivityLogModel;

class Faq extends BaseController
{
    protected $faqModel;

    public function __construct()
    {
        $this->faqModel = new FaqModel();
    }

    public function index()
    {
        $faqs = $this->faqModel->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'title' => 'Kelola FAQ (Pertanyaan Umum)',
            'faqs'  => $faqs,
        ];

        return view('faq/index', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id');
        $question = trim($this->request->getPost('question') ?? '');
        $answer = trim($this->request->getPost('answer') ?? '');
        $sortOrder = (int) ($this->request->getPost('sort_order') ?? 0);
        $isActive = $this->request->getPost('is_active') ? '1' : '0';

        if (empty($question) || empty($answer)) {
            return redirect()->back()->with('error', 'Pertanyaan dan jawaban wajib diisi.');
        }

        $saveData = [
            'question'   => $question,
            'answer'     => $answer,
            'sort_order' => $sortOrder,
            'is_active'  => $isActive,
        ];

        if (!empty($id)) {
            $this->faqModel->update($id, $saveData);
            ActivityLogModel::log('UPDATE', 'faq', "Memperbarui FAQ ID #{$id}: '{$question}'", (string)$id);
            $msg = 'FAQ berhasil diperbarui.';
        } else {
            $newId = $this->faqModel->insert($saveData);
            ActivityLogModel::log('INSERT', 'faq', "Menambahkan FAQ baru: '{$question}'", (string)$newId);
            $msg = 'FAQ baru berhasil ditambahkan.';
        }

        return redirect()->to('/faq')->with('success', $msg);
    }

    public function delete($id = null)
    {
        $item = $this->faqModel->find($id);
        if ($item) {
            $this->faqModel->delete($id);
            ActivityLogModel::log('DELETE', 'faq', "Menghapus FAQ: '{$item['question']}'", (string)$id);
            return redirect()->to('/faq')->with('success', 'FAQ berhasil dihapus.');
        }

        return redirect()->to('/faq')->with('error', 'FAQ tidak ditemukan.');
    }
}
