<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
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
        Carbon::setLocale(app()->getLocale());

        if (request()->is('admin/*')) {
            Paginator::defaultView('vendor.pagination.tailwind');
        } else {
            Paginator::defaultView('vendor.pagination.simple-tailwind');
        }
    }
}
