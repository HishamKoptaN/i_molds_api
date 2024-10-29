<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OffersDashController extends Controller
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

    public function storeProductImage(Request $request)
    {
        if ($request->hasFile('product_image')) {
            $request->validate(
                [
                    'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ],
            );
            $imageName = time() . '.' . $request->file('product_image')->getClientOriginalExtension();
            $request->file('product_image')->move(public_path('storage/products'), $imageName);
            $url = asset('storage/products/' . $imageName);
            return response()->json(['message' => 'Image uploaded successfully', 'image_url' => $url]);
        }
        return response()->json(
            ['message' => 'No image uploaded'],
            400,
        );
    }
}
