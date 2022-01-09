<?php

namespace App\Providers;

use App\View\Components\AddWorkHome;
use App\View\Components\AlertHome;
use App\View\Components\Copyright;
use App\View\Components\Logo;
use App\View\Components\Navbar;
use App\View\Components\WorksHome;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
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
        Paginator::useBootstrap();

        Blade::component('logo', Logo::class);
        Blade::component('navbar', Navbar::class);
        Blade::component('copyright', Copyright::class);
        Blade::component('works-home', WorksHome::class);
        Blade::component('add-work-home', AddWorkHome::class);
        Blade::component('notifications', AlertHome::class);
    }
}
