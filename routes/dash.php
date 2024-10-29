<?php

use Illuminate\Support\Facades\Route;
//--------------------Dash--------------------//
use App\Http\Controllers\Dash\CountriesDashController;
use App\Http\Controllers\Dash\GovernoratesDashController;
use App\Http\Controllers\Dash\StoresDashController;
use App\Http\Controllers\Dash\CategoriesDashController;
use App\Http\Controllers\Dash\OffersDashController;

Route::any(
    '/countries/{id?}',
    [
        CountriesDashController::class,
        'handleRequest'
    ],
);
Route::any(
    '/governorates/{id?}',
    [
        GovernoratesDashController::class,
        'handleRequest'
    ],
);

Route::any(
    '/stores/{id?}',
    [
        StoresDashController::class,
        'handleRequest'
    ],
);
Route::any(
    '/categories/{id?}',
    [
        CategoriesDashController::class,
        'handleRequest',
    ],

);
Route::any(
    '/offers/{id?}',
    [
        OffersDashController::class,
        'handleRequest',
    ],

);
Route::get(
    '/test',
    function () {
        return "Dash route Connected";
    },
);
