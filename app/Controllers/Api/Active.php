<?php

namespace App\Controllers\Api;

use App\Models\ProgramModel;
use App\Models\GalleryModel;
use App\Models\FaqModel;

class Active extends BaseApiController
{
    /**
     * GET /api/active
     * Unified active bundle (programs, galleries, faqs)
     * Backend cached with single keys: vlc_be_active & vlc_be_active_backup
     */
    public function index()
    {
        $cacheKey = 'vlc_be_active';
        $backupKey = 'vlc_be_active_backup';
        $noCache = $this->request->getGet('nocache') !== null;

        $data = $noCache ? null : cache($cacheKey);

        if ($data === null) {
            try {
                $programModel = new ProgramModel();
                $galleryModel = new GalleryModel();
                $faqModel = new FaqModel();

                $programs = $programModel->getActivePrograms();
                foreach ($programs as &$p) {
                    $details = $programModel->getProgramWithModules($p['id']);
                    $p['modules'] = $details['modules'] ?? [];
                    $p['modules_count'] = $details['modules_count'] ?? count($p['modules']);
                }

                $data = [
                    'programs'   => $programs,
                    'galleries'  => $galleryModel->getActiveGalleries(),
                    'faqs'       => $faqModel->getActiveFaqs(),
                    'synced_at'  => date('Y-m-d H:i:s'),
                ];

                cache()->save($cacheKey, $data, 3600);
                cache()->save($backupKey, $data, 86400 * 30);
            } catch (\Throwable $e) {
                log_message('error', 'Error generating vlc_be_active: ' . $e->getMessage());
                $data = cache($backupKey);
            }
        }

        if (empty($data)) {
            $data = cache($backupKey) ?? [
                'programs'  => [],
                'galleries' => [],
                'faqs'      => [],
                'synced_at' => date('Y-m-d H:i:s'),
            ];
        }

        return $this->respondSuccess($data, 'Active VLC data fetched successfully');
    }
}
