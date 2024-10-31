<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Traits\ApiResponseTrait;


class StoresDashController extends Controller
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
                    $id,
                );
            case 'POST':
                return $this->post(
                    $request,
                    $id,
                );
            case 'PUT':
                return $this->put(
                    $request,
                    $id,
                );
            case 'DELETE':
                return $this->delete(
                    $request,
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
            $stores = Store::all();
            return $this->successResponse($stores);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage());
        }
    }
    public function post(Request $request)
    {
        try {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('storage/products'), $imageName);
            $url = asset('storage/stores/' . $imageName);
            Store::create(
                [
                    'name' => $request->name,
                    'image' => $url,
                    'country_id' => $request->country_id,
                    'governorate_id' => $request->governorate_id,
                    'place' => $request->place,
                ],
            );
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }

    public function delete($id)
    {
        try {
            $store = Store::findOrFail($id);
            $store->delete();
            $stores = Store::all();
            return $this->successResponse($stores, 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->failureResponse("not found.", 404);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
}
