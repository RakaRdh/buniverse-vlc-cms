<?php

namespace App\Controllers\Api;

use App\Models\GalleryModel;

class Galleries extends BaseApiController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    /**
     * GET /api/galleries (Reads from unified vlc_be_active bundle)
     */
    public function index()
    {
        $active = cache('vlc_be_active') ?? cache('vlc_be_active_backup');
        if (!empty($active['galleries'])) {
            return $this->respondSuccess($active['galleries'], 'Galleries fetched successfully');
        }

        $galleries = $this->galleryModel->getActiveGalleries();
        return $this->respondSuccess($galleries, 'Galleries fetched successfully');
    }
}
