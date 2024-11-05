<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Notifications\SendOtpNotification;
use App\Models\PasswordResetOtp;
use App\Traits\ApiResponseTrait;
use App\Models\User;


class PasswordResetController extends Controller
{
    use ApiResponseTrait;
    public function sendOtp(Request $request)
    {

        try {
            $request->validate([
                'email' => 'required|email|exists:users,email',
            ]);

            $otp = rand(100000, 999999);
            $expiresAt = Carbon::now()->addMinutes(5);

            PasswordResetOtp::updateOrCreate(
                [
                    'email' => $request->email,
                ],
                [
                    'otp' => $otp,
                    'expires_at' => $expiresAt,
                ]
            );
            $user = User::where('email', $request->email)->first();
            $user->notify(new SendOtpNotification($otp));
            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->failureResponse(
                $th->getMessage(),
            );
        }
    }
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);
        $otpEntry = PasswordResetOtp::where('email', $request->email)
            ->where('otp', $request->otp)
            ->first();
        if (!$otpEntry) {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }
        if ($otpEntry->expires_at < now()) {
            return response()->json(['message' => 'OTP has expired'], 400);
        }
        return response()->json(['message' => 'OTP verified successfully'], 200);
    }
    public function reset(Request $request)
    {
        $request->validate(
            [
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ],
        );

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(
                    [
                        'password' => Hash::make($password)
                    ],
                )->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => __($status)], 200)
            : response()->json(['message' => __($status)], 400);
    }
}
