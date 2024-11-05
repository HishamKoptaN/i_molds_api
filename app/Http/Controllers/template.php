<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use App\Models\PriceForm;

class TemplateController extends Controller
{
    use ApiResponseTrait;
    public function handleRequest(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'POST':
                return $this->store(
                    $request,
                    $id,
                );
            case 'GET':
                return $this->get();
            case 'PUT':
                return $this->update(
                    $request,
                    $id,
                );
            case 'DELETE':
                return $this->delete(
                    $id,
                );
            default:
                return response()->json(
                    [
                        'status' => 'error',
                        'message' => 'Method not allowed',
                    ],
                    405,
                );
        }
    }

    public function get()
    {
        $governorates = [];
        try {
            return $this->successResponse(
                $governorates,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                500,
                $e->getMessage(),
            );
        }
    }
    public function store(
        Request $request,
        $user_id,
    ) {
        $governorates = [];
        try {
            return $this->successResponse(
                $governorates,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                500,
                $e->getMessage(),
            );
        }
    }

    public function index()
    {
        $governorates = [];
        try {
            return $this->successResponse(
                $governorates,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                500,
                $e->getMessage(),
            );
        }
    }
    public function update(Request $request, $id)
    {
        $governorates = [];
        try {
            return $this->successResponse(
                $governorates,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                500,
                $e->getMessage(),
            );
        }
    }
    public function delete($id)
    {
        $governorates = [];
        try {
            return $this->successResponse(
                $governorates,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                500,
                $e->getMessage(),
            );
        }
    }
}
