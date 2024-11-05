<?php

use Illuminate\Support\Facades\Route;
//--------------------Dash--------------------//
use App\Http\Controllers\Dash\PriceFormDashController;
use App\Http\Controllers\Dash\UsersDashController;
use Illuminate\Support\Facades\Artisan;
//========================  Dashboard ======================//
Route::any(
    '/users/{id?}',
    [
        UsersDashController::class,
        'handleRequest',
    ],
);
Route::any(
    '/price-form/{id?}',
    [
        PriceFormDashController::class,
        'handleRequest',
    ],
);

Route::get(
    '/test',
    function () {
        return "Dash  Connected";
    },
);
