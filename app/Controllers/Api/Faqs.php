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
     * GET /api/faqs (Reads from unified vlc_be_active bundle)
     */
    public function index()
    {
        $active = cache('vlc_be_active') ?? cache('vlc_be_active_backup');
        if (!empty($active['faqs'])) {
            return $this->respondSuccess($active['faqs'], 'FAQs fetched successfully');
        }

        $faqs = $this->faqModel->getActiveFaqs();
        return $this->respondSuccess($faqs, 'FAQs fetched successfully');
    }
}
