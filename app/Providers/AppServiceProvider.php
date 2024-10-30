<?php

namespace App\Providers;

use App\Models\Legoset;
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
        Gate::define('edit-set', function (User $user, Legoset $set) {
            return $set->user->is($user);
        });

        Gate::define('is-admin', function (User $user) {
            return $user->isAdmin === 1;
        });
    }
}
