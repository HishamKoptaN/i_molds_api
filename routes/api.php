<?php

use Illuminate\Support\Facades\Route;
//--------------------Auth--------------------//
use App\Http\Controllers\Auth\CheckController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
//--------------------App--------------------//
use App\Http\Controllers\Api\OffersApiController;
use App\Http\Controllers\Api\StorsApiController;
//--------------------Dash--------------------//
use App\Http\Controllers\Dash\StorsDashController;
use App\Http\Controllers\Dash\OffersDashController;
//--------------------Models--------------------//

//========================   Auth  ==========================//

Route::post(
    '/login',
    [
        LoginController::class,
        'login',
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
    '/check',
    [
        CheckController::class,
        'check',
    ],
);
Route::post(
    '/register',
    [
        RegisterController::class,
        'register',
    ],
);

//=========================  Api   ==========================//
Route::any(
    '/stors',
    [
        StorsApiController::class,
        'handleStors'
    ],
);

Route::any(
    '/offers',
    [
        OffersApiController::class,
        'handleOffers'
    ],
);

//========================  Dashboard ======================//
Route::any(
    'dash/stors',
    [
        StorsDashController::class,
        'handleOffers'
    ],
);
Route::any(
    'dash/offers',
    [
        OffersDashController::class,
        'storeProductImage',
    ],

);
Route::get(
    '/test',
    function () {
        return response()->json(
            [
                'status' => 'Connected',
            ],
            200,
        );
    },
);

Route::any(
    '/product/image',
    [
        OffersApiController::class,
        'storeProductImage',
    ],
);
