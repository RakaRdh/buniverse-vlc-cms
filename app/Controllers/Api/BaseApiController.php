<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class BaseApiController extends ResourceController
{
    use ResponseTrait;

    protected $format = 'json';

    protected function respondSuccess($data = null, string $message = 'Success', int $code = 200)
    {
        return $this->respond([
            'status'  => $code,
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], $code);
    }

    protected function respondFail($message = 'Bad Request', int $code = 400, $errors = null)
    {
        return $this->respond([
            'status'  => $code,
            'success' => false,
            'message' => $message,
            'errors'  => $errors,
        ], $code);
    }
}
