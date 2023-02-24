<?php

namespace Toastr\Main;

use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Toastr\Main\ToastrController');
        $this->loadViewsFrom(__DIR__.'/view','toaster');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/routes.php';
        //
    }
}
