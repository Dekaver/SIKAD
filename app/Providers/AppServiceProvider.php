<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin', function (User $user) {
            return $user->hasRole('admin') ? true : null;
        });

        Gate::define('student', function (User $user) {
            return $user->hasRole('student') ? true : null;
        });

        Gate::define('lecturer', function (User $user) {
            return $user->hasRole('lecturer') ? true : null;
        });
    }
}
