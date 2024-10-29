<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

use App\Traits\ApiResponseTrait;

use App\Models\Governorate;

class GovernoratesDashController extends Controller
{
    use ApiResponseTrait;
    public function handleRequest(Request $request, $id = null)
    {
        switch ($request->method()) {
            case 'GET':
                return $this->get($request);
            case 'POST':
                return $this->store($request);
            case 'PUT':
                return $this->update($request);
            case 'DELETE':
                return $this->delete($id);
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
            $governorates = Governorate::all();
            return $this->successResponse($governorates);
        } catch (\Exception $e) {
            return $this->failureResponse(500, $e->getMessage());
        }
    }
    public function store(Request $request)
    {
        try {
            $country = new Governorate();
            $country->name = $request->input('name');
            $country->country_id = $request->input('country_id');
            $governorates = Governorate::all();
            $country->save();
            return $this->successResponse(
                $governorates,
                201,
            );
        } catch (Exception $e) {
            return $this->failureResponse(
                $e->getMessage(),
                500,
            );
        }
    }
    public function updateCountry(Request $request)
    {
        $countries = Governorate::all();
        return response()->json(
            $countries,
        );
    }
    public function delete($id)
    {
        try {
            $country = Governorate::findOrFail($id);
            $country->delete();
            $countries = Governorate::all();
            return $this->successResponse($countries, 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return $this->failureResponse("not found.", 404);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
}
