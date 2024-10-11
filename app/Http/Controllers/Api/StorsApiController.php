<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StorsApiController extends Controller
{
    public function handleStors(
        Request $request,
        $id = null,
    ) {
        switch ($request->method()) {
            case 'GET':
                return $this->getStors();
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
    public function getStors()
    {
        $stors = Store::all();
        return response()->json($stors);
    }
}
