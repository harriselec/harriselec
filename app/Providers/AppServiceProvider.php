<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\StarlingBankService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(StarlingBankService::class, function ($app) {
            $personalAccessToken = env('STARLING_PERSONAL_ACCESS_TOKEN');
            return new StarlingBankService($personalAccessToken);
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
