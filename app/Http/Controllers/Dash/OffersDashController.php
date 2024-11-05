<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use App\Models\Offer;

class OffersDashController extends Controller
{
    use ApiResponseTrait;
    public function handleRequest(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->get();
            case 'POST':
                return $this->post(
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
    public function get()
    {
        try {
            $offers = Offer::all();
            return $this->successResponse(
                $offers,
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
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                public_path('storage/offers'),
                $imageName,
            );
            $url = asset('storage/stores/' . $imageName);
            Offer::create(
                [
                    'name' => $request->name,
                    'image' => $url,
                ],
            );
            return $this->successResponse([], 200);
        } catch (\Exception $e) {
            return $this->failureResponse($e->getMessage(), 500);
        }
    }
}
