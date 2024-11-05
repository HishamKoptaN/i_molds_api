<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use App\Models\PriceForm;

class PriceFormDashController extends Controller
{
    use ApiResponseTrait;
    public function handleRequest(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'POST':
                return $this->store($request, $id);
            case 'GET':
                return $this->index();
            case 'PUT':
                return $this->update($request, $id);
            case 'DELETE':
                return $this->delete($id);
            default:
                return response()->json(['status' => 'error', 'message' => 'Method not allowed'], 405);
        }
    }

    public function get()
    {
        $governorates = [];
        try {
            return $this->successResponse($governorates);
        } catch (\Exception $e) {
            return $this->failureResponse(500, $e->getMessage());
        }
    }
    public function store(
        Request $request,
        $user_id,
    ) {
        $request->validate(
            [
                'url' => 'nullable|url',
            ]
        );
        $priceForm = PriceForm::create(
            [
                'url' => $request->url,
                'user_id' => $user_id,
            ],
        );

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Price form created successfully!',
                'data' => $priceForm,
            ]
        );
    }

    public function index()
    {
        $priceForms = PriceForm::all();
        return response()->json($priceForms);
    }
    public function update(
        Request $request,
        $id,
    ) {
        $priceForm = PriceForm::findOrFail(
            $id,
        );

        $request->validate(
            [
                'url' => 'nullable|url',
                'user_id' => 'required|exists:users,id'
            ],
        );

        $priceForm->update(
            $request->all(),
        );

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Price form updated successfully!',
                'data' => $priceForm
            ],
        );
    }
    public function delete(
        $id,
    ) {
        try {
            $priceForm = PriceForm::findOrFail(
                $id,
            );
            $priceForm->delete();
            return $this->successResponse(
                [],
                200,
            );
        } catch (\Exception $e) {
            return $this->failureResponse(
                500,
                $e->getMessage(),
            );
        }
    }
}
