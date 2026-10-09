<?php

namespace App\Controllers\Api;

use App\Models\FaqModel;

class Faqs extends BaseApiController
{
    protected $faqModel;

    public function __construct()
    {
        $this->faqModel = new FaqModel();
    }

    /**
     * GET /api/faqs
     */
    public function index()
    {
        $faqs = $this->faqModel->getActiveFaqs();
        return $this->respondSuccess($faqs, 'FAQs fetched successfully');
    }
}
