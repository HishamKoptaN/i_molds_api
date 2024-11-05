<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ApiResponseTrait;
use App\Models\PriceForm;

class PriceFormApiController extends Controller
{
    use ApiResponseTrait;
    public function handleRequest(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'POST':
                return $this->post($request, $id);
            case 'GET':
                return $this->get();
            case 'PUT':
                return $this->put($request, $id);
            case 'DELETE':
                return $this->destroy($id);
        }
    }

    public function get()
    {
        try {
            $user = Auth::guard('sanctum')->user();
            if (!$user) {
                return $this->failureResponse(
                    'User not authenticated',
                    401,
                );
            }
            $priceForms = PriceForm::where("user_id", $user->id)->get();
            if ($priceForms->isEmpty()) {
                return $this->failureResponse(
                    'No Price Forms found for the user',
                    404,
                );
            } else {
                return $this->successResponse(
                    $priceForms,
                );
            }
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage());
        }
    }
    public function post(
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


    public function update(Request $request, $id)
    {
        $priceForm = PriceForm::findOrFail($id);

        $request->validate(
            [
                'url' => 'nullable|url',
                'user_id' => 'required|exists:users,id'
            ],
        );

        $priceForm->update($request->all());

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Price form updated successfully!',
                'data' => $priceForm
            ],
        );
    }
    public function destroy($id)
    {
        $priceForm = PriceForm::findOrFail($id);
        $priceForm->delete();
        return response()->json(
            [
                'status' => 'success',
                'message' => 'Price form deleted successfully!'
            ],
        );
    }
}
