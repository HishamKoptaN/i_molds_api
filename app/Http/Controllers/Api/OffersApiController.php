<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Store;

class OffersApiController extends Controller
{
    public function handleOffers(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->getOffers($id);
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
    public function getOffers($id)
    {
        $offers = Offer::offersByGovernorate(
            $id,
        )
            ->with('store')
            ->get();
        $stores = Store::byGovernorateId($id)->get();
        $categories = Category::all();
        return response()->json(
            [
                "offers" => $offers,
                "stores" => $stores,
                "categories" => $categories,
            ]
        );
    }
}
