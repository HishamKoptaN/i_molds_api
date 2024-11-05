<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class CategoriesDashController extends Controller
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
    public function get(Request $request)
    {
        try {
            $categories = Category::all();
            return $this->successResponse(
                $categories,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                $e->getMessage(),
            );
        }
    }
    public function post(Request $request)
    {
        try {
            Category::create(
                [
                    'name' => $request->name,
                ],
            );
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
    public function put(Request $request) {}
    public function delete(Request $request) {}
}
