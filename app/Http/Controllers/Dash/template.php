<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Traits\ApiResponseTrait;
use App\Models\Governorate;

class TemplateDashController extends Controller
{
    use ApiResponseTrait;
    public function handleRequest(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->get(
                    $request,
                );
            case 'POST':
                return $this->post(
                    $request,
                );
            case 'PUT':
                return $this->put(
                    $request,
                );
            case 'DELETE':
                return $this->delete(
                    $id,
                );
            default:
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Invalid request method',
                    ],
                );
        }
    }
    public function get()
    {
        try {
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
    public function store(Request $request)
    {
        try {
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
    public function put(Request $request)
    {
        try {
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
    public function delete($id)
    {
        try {
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
}
