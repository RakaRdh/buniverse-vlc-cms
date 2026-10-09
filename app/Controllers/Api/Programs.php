<?php

namespace App\Controllers\Api;

use App\Models\ProgramModel;

class Programs extends BaseApiController
{
    protected $programModel;

    public function __construct()
    {
        $this->programModel = new ProgramModel();
    }

    /**
     * GET /api/programs (Reads from unified vlc_be_active bundle)
     */
    public function index()
    {
        $active = cache('vlc_be_active');
        if (!empty($active['programs'])) {
            return $this->respondSuccess($active['programs'], 'Programs fetched successfully');
        }

        // Fallback: trigger unified active index
        $activeController = new Active();
        $response = $activeController->index();
        $active = cache('vlc_be_active') ?? cache('vlc_be_active_backup');
        $programs = $active['programs'] ?? $this->programModel->getActivePrograms();

        return $this->respondSuccess($programs, 'Programs fetched successfully');
    }

    /**
     * GET /api/programs/(:any)
     */
    public function show($slugOrId = null)
    {
        if (empty($slugOrId)) {
            return $this->respondFail('Program identifier is required', 400);
        }

        // First check in unified active bundle for fast response
        $active = cache('vlc_be_active') ?? cache('vlc_be_active_backup');
        if (!empty($active['programs'])) {
            foreach ($active['programs'] as $p) {
                if ((string)$p['id'] === (string)$slugOrId || (!empty($p['slug']) && $p['slug'] === $slugOrId)) {
                    if (!empty($p['modules'])) {
                        return $this->respondSuccess($p, 'Program detail fetched successfully');
                    }
                }
            }
        }

        $program = $this->programModel->getProgramWithModules($slugOrId);

        if (!$program) {
            return $this->respondFail('Program not found', 404);
        }

        return $this->respondSuccess($program, 'Program detail fetched successfully');
    }
}
