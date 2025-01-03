<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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

        Schema::defaultStringLength(191);
    }
    

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}

