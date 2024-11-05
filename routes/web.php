<?php

use Illuminate\Support\Facades\Route;

Route::get('/verify-otp', function () {
    return view('verify_otp', ['email' => session('email')]);
})->name('verify.otp.view');

Route::post('/verify-otp', [YourController::class, 'verifyOtp'])->name('verify.otp');
