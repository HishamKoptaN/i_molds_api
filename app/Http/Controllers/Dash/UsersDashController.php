<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersDashController extends Controller
{
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
                return $this->destroy($id);
            default:
                return response()->json(
                    [
                        'status' => 'error',
                        'message' => 'Method not allowed',
                    ],
                    405,
                );
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
        $priceForm = User::create(
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
        $users = User::pluck('id')->map(
            function ($id) {
                return ['id' => $id];
            },
        );
        return response()->json($users);
    }



    public function update(Request $request, $id)
    {
        $priceForm = User::findOrFail($id);

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
        $priceForm = User::findOrFail($id);
        $priceForm->delete();
        return response()->json(
            [
                'status' => 'success',
                'message' => 'Price form deleted successfully!'
            ],
        );
    }
}
