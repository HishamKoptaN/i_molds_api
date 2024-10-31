<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\ApiResponseTrait;
use App\Models\Offer;

use App\Models\Store;

class OffersApiController extends Controller
{
    public function handleRequest(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->get($id);
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
    public function get($governorateId)
    {
        // $offers = Offer::offersByGovernorate(
        //     $governorateId,
        // )
        //     ->with('store')
        //     ->get();
        $stores = Store::with(['offers'])->get()->map(
            function ($store) {
                return [
                    'id' => $store->id,
                    'name' => $store->name,
                    'image' => $store->image,
                    'country_id' => $store->country_id,
                    'governorate_id' => $store->governorate_id,
                    'place' => $store->place,
                    'offers_count' => $store->offers->count(),
                    'offers' => $store->offers,
                ];
            },
        );
        $categories = Category::withCount('offers')
            ->having('offers_count', '>', 0)
            ->with(
                [
                    'offers' => function ($query) use ($governorateId) {
                        $query->byGovernorateId($governorateId);
                    }
                ],
            )
            ->get();
        return response()->json(
            [
                "categories" => $categories,
                "stores" => $stores,
                // "offers" => $offers,
            ]
        );
    }
}
