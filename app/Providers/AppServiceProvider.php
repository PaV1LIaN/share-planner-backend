<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AuthorizationService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AuthorizationService::class, function ($app) {
            return new AuthorizationService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}