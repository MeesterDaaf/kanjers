<?php

namespace App\Providers;

use App\View\Composers\DarkModeComposer;
use App\View\Composers\MenuComposer;
use App\View\Composers\FakerComposer;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', MenuComposer::class);
        View::composer('*', FakerComposer::class);
        View::composer('*', DarkModeComposer::class);
    }
}
