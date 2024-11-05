<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiResponseTrait;
use App\Models\User;
use App\Models\Currency;
use App\Models\Account;

class RegisterController extends Controller
{
    use ApiResponseTrait;

    public function register(Request $request): JsonResponse
    {
        try {
            $user = User::create(
                [
                    'status' => 'active',
                    'token' => sha1(str()->random()),
                    'name' => $request->name,
                    'username' => $request->name . "." . str()->random(2),
                    'password' => Hash::make($request->password,),
                    'email' => $request->email,
                    'image' => "default.png",
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'phone_verified_at' => null,
                    'phone_verification_code' => null,
                    'inactivate_end_at' => null,
                    'message' => rand(11111, 99999),
                ],
            );
            if ($user) {
                $token = $user->createToken("auth", ['*'], now()->addWeek());
                return $this->successResponse(
                    [
                        'status' => true,
                        'token' => $token->plainTextToken,
                        'user' => $user
                    ],
                );
            }
        } catch (\Throwable $th) {
            return $this->failureResponse(
                $th->getMessage(),
            );
        }
    }
}
