<?php

namespace App\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;


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
       //
    }
}
