<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OffersDashController extends Controller
{
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
        return response()->json(['message' => 'No image uploaded'], 400);
    }
}
