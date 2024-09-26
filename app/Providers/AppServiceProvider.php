<?php

namespace App\Providers;

use Gate;
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
        //

        Gate::define('user-admin', function ($user) {
            return $user->role === 'Admin';
        });
    }
}
