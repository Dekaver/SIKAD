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
        // Ambil semua daftar permission unik dari file config
        $matrix = config('permissions.role_permissions', []);
        $allPermissions = array_unique(array_merge(...array_values($matrix)));

        // Daftarkan setiap permission secara otomatis ke Laravel Gate
        foreach ($allPermissions as $permission) {
            Gate::define($permission, function (User $user) use ($permission) {
                return $user->hasPermission($permission);
            });
        }
    }
}
