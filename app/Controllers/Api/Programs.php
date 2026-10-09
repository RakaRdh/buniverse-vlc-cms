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
     * GET /api/programs
     */
    public function index()
    {
        $programs = $this->programModel->getActivePrograms();
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

        $program = $this->programModel->getProgramWithModules($slugOrId);

        if (!$program) {
            return $this->respondFail('Program not found', 404);
        }

        return $this->respondSuccess($program, 'Program detail fetched successfully');
    }
}
