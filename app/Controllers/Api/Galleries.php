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
     * GET /api/galleries
     */
    public function index()
    {
        $galleries = $this->galleryModel->getActiveGalleries();
        return $this->respondSuccess($galleries, 'Galleries fetched successfully');
    }
}
