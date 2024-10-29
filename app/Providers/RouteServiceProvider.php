<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';
    public function boot()
    {
        parent::boot();
        RateLimiter::for(
            'api',
            function (Request $request) {
                return Limit::perMinute(120)->by(
                    $request->user()?->id ?: $request->ip(),
                );
            },
        );
    }
    public function map()
    {
        $this->mapAuthApiRoutes();
        $this->mapAppApiRoutes();
        $this->mapDashApiRoutes();
        $this->mapWebRoutes();
    }
    protected function mapAuthApiRoutes()
    {
        Route::prefix('auth')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(
                base_path(
                    'routes/auth.php',
                ),
            );
    }
    protected function mapAppApiRoutes()
    {
        Route::prefix('app')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(
                base_path(
                    'routes/app.php'
                ),
            );
    }

    protected function mapDashApiRoutes()
    {
        Route::prefix('dash')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(
                base_path(
                    'routes/dash.php',
                ),
            );
    }
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(
                base_path(
                    'routes/web.php',
                ),
            );
    }

    // protected function map()
    // {
    //     $this->mapAppApiRoutes();
    //     $this->mapAdminApiRoutes();
    // }
    // protected function mapAppApiRoutes()
    // {
    //     Route::prefix('app')
    //         ->middleware('app')
    //         ->namespace($this->namespace)
    //         ->group(
    //             base_path('routes/app_api.php'),
    //         );
    // }
    // protected function mapDashApiRoutes()
    // {
    //     Route::prefix('dash')
    //         ->middleware('api')
    //         ->namespace($this->namespace)
    //         ->group(base_path('routes/dash_api.php'));
    // }

    // public function boot(): void
    // {
    //     RateLimiter::for(
    //         'api',
    //         function (Request $request) {
    //             return Limit::perMinute(120)->by(
    //                 $request->user()?->id ?: $request->ip(),
    //             );
    //         },
    //     );

    //     $this->routes(
    //         function () {
    //             Route::middleware('app_api')
    //                 ->prefix('api')
    //                 ->group(
    //                     base_path(
    //                         'routes/api.php',
    //                     ),
    //                 );
    //             Route::middleware('api')
    //                 ->prefix('api')
    //                 ->group(
    //                     base_path(
    //                         'routes/api.php',
    //                     ),
    //                 );

    //             Route::middleware('web')
    //                 ->group(
    //                     base_path(
    //                         'routes/web.php',
    //                     ),
    //                 );
    //         },
    //     );
    // }
}
