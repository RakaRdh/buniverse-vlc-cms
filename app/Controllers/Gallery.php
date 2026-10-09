<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\ActivityLogModel;

class Gallery extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index()
    {
        $galleries = $this->galleryModel->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'title'     => 'Kelola Galeri Media',
            'galleries' => $galleries,
        ];

        return view('gallery/index', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id');
        $title = trim($this->request->getPost('title') ?? '');
        $image = trim($this->request->getPost('image') ?? '');
        $uploadedFile = $this->request->getFile('gallery_file');
        if ($uploadedFile && $uploadedFile->isValid() && !$uploadedFile->hasMoved()) {
            $newName = $uploadedFile->getRandomName();
            $targetPath = FCPATH . 'uploads/gallery';
            if (!is_dir($targetPath)) {
                mkdir($targetPath, 0755, true);
            }
            $uploadedFile->move($targetPath, $newName);
            $image = '/uploads/gallery/' . $newName;
        }

        $sortOrder = (int) ($this->request->getPost('sort_order') ?? 0);
        $isActive = $this->request->getPost('is_active') ? '1' : '0';

        if (empty($image)) {
            return redirect()->back()->with('error', 'Path atau upload gambar wajib diisi.');
        }

        $saveData = [
            'title'      => $title ?: 'Galeri VLC',
            'image'      => $image,
            'sort_order' => $sortOrder,
            'is_active'  => $isActive,
        ];

        if (!empty($id)) {
            $this->galleryModel->update($id, $saveData);
            ActivityLogModel::log('UPDATE', 'gallery', "Memperbarui item galeri ID #{$id}: '{$saveData['title']}'", (string)$id);
            $msg = 'Item galeri berhasil diperbarui.';
        } else {
            $newId = $this->galleryModel->insert($saveData);
            ActivityLogModel::log('INSERT', 'gallery', "Menambahkan item galeri baru: '{$saveData['title']}'", (string)$newId);
            $msg = 'Item galeri baru berhasil ditambahkan.';
        }

        $this->purgeAllCache();

        return redirect()->to('/gallery')->with('success', $msg);
    }

    public function delete($id = null)
    {
        $item = $this->galleryModel->find($id);
        if ($item) {
            $this->galleryModel->delete($id);
            ActivityLogModel::log('DELETE', 'gallery', "Menghapus item galeri: '{$item['title']}'", (string)$id);
            $this->purgeAllCache();
            return redirect()->to('/gallery')->with('success', 'Item galeri berhasil dihapus.');
        }

        return redirect()->to('/gallery')->with('error', 'Item galeri tidak ditemukan.');
    }
}
