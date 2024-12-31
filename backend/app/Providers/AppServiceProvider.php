<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Load web.php routes
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // Load api.php routes
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}

