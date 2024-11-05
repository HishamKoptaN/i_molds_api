<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiResponseTrait;

class LoginController extends Controller
{
    use ApiResponseTrait;
    public function login(
        Request $request,
    ) {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if (!Auth::attempt($credentials)) {
                return $this->failureResponse(
                    'The provided credentials do not match our records.',
                );
            }
            $user = Auth::user();
            $token = $user->createToken("auth", ['*'], now()->addWeek());
            $data = [
                'token' => $token->plainTextToken,
                'user' => $user,
            ];
            return $this->successResponse(
                $data,
            );
        } catch (\Throwable $th) {
            return $this->failureResponse(
                $th->getMessage(),
            );
        }
    }
}
