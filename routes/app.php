<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PriceFormApiController;
use App\Http\Controllers\Auth\CheckController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
//--------------------Models--------------------//
Route::post(
    '/check',
    [
        CheckController::class,
        'check',
    ],
);
Route::any(
    '/price-form/{id?}',
    [
        PriceFormApiController::class,
        'handleRequest',
    ],
);
Route::get(
    '/test',
    function () {
        return "test";
    },
);
