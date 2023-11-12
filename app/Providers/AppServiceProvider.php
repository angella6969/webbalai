<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;


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
        Validator::extend('pdf', function ($attribute, $value, $parameters, $validator) {
            // Validasi jika file adalah PDF
            return $value->getClientOriginalExtension() === 'pdf';
        });
        Paginator::useBootstrap();
        Gate::define('SuperAdmin', function (User $user) {
            return $user->role_id == 1;
        });
        Gate::define('Admin', function (User $user) {
            return $user->role_id == 1 || $user->role_id == 2;
        });
        Gate::define('AdminSisda', function (User $user) {
            return $user->role_id == 1 || $user->role_id == 3;

        });
    }
}
