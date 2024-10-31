<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SettingsApiController;
use App\Http\Controllers\Api\OffersApiController;
use App\Http\Controllers\Api\StoresApiController;
use App\Http\Controllers\Api\CategoriesApiController;
//--------------------Models--------------------//
Route::any(
    '/settings',
    [
        SettingsApiController::class,
        'handleRequest'
    ],
);
Route::any(
    '/stores',
    [
        StoresApiController::class,
        'handleStores'
    ],
);
Route::any(
    '/categories/{id?}',
    [
        CategoriesApiController::class,
        'handleRequest'
    ],
);
Route::any(
    '/offers/{id?}',
    [
        OffersApiController::class,
        'handleRequest'
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
Route::get(
    '/test',
    function () {
        return "App route Connected";
    },
);
