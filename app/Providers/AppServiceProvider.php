<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

// 👉 IMPORTANTE AÑADIR ESTO
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // ✅ ESTA ES LA LÍNEA CLAVE
        Schema::defaultStringLength(191);

        // gates en laravel
        Gate::define('ver-admin', function (User $user){
            return $user->rol === 'admin';
        });

        Gate::define('ver-ventas', function (User $user){
            return in_array($user->rol, ['admin', 'cajero']);
        });
    }
}
