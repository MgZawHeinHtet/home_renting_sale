<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator as PaginationPaginator;
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
        PaginationPaginator::defaultView('vendor.pagination.tailwind');
        Model::unguard();
    }
}
