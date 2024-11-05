<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CheckController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;

Route::post(
    '/check',
    [
        CheckController::class,
        'check',
    ],
);
Route::post(
    '/login',
    [
        LoginController::class,
        'login',
    ],
);
Route::post(
    '/register',
    [
        RegisterController::class,
        'register',
    ],
);
Route::post(
    '/password/email',
    [
        PasswordResetController::class,
        'sendResetLinkEmail',
    ],
);
Route::post(
    '/password/reset',
    [
        PasswordResetController::class,
        'reset',
    ],
);
Route::post(
    '/send-otp',
    [
        PasswordResetController::class,
        'sendOtp',
    ],
);
Route::post(
    '/password/verify-otp',
    [
        PasswordResetController::class,
        'verifyOtp',
    ],
);
Route::get(
    '/test',
    function () {
        return "test auth";
    },
);
