<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OffersApiController extends Controller
{
    public function handleOffers(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->getOffers();
            case 'POST':
                return $this->sendMessage(
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
    public function getOffers()
    {
        $offers = Offer::all();
        return response()->json($offers);
    }
}
