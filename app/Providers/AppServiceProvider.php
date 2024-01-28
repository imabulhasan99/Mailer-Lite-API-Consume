<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Http::macro('mailerlite', function () {
            return Http::withToken( config('mailerlite.apiKey') )
                    ->baseUrl('https://connect.mailerlite.com/');
        });
    }
}
