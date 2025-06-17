<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Laravel\Sanctum\PersonalAccessToken;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Contracts\RepoInterface', 'App\Repos\UserRepo');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
           Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
