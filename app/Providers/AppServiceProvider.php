<?php

namespace App\Providers;

use App\Models\SocialMedias;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

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
        $social=SocialMedias::first();
        View::share('social',$social);
        Paginator::useBootstrap();
    }
}
