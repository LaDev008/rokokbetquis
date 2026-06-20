<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\SeoPage;
use App\Models\Site;
use App\Models\Navigation;
use App\Models\PredictMarket;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
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
        view()->composer('layouts.mainlayout', function ($view) {
            $view->with(['page' => Page::find(1),  'navigation' => Navigation::with('seoPages')->where('route_name', Route::current()->getName())->first(), 'top_market' => PredictMarket::where('id', "<=", "3")->get(), 'link_bo' => Site::firstWhere('name', "NANA4D")]);
            // dd(Navigation::with('seoPages')->where('route_name', Route::current()->getName())->first());
        });

        view()->composer('layouts.articlelayout', function ($view) {
            $view->with(['page' => Page::find(1),  'navigation' => Navigation::with('seoPages')->where('route_name', Route::current()->getName())->first()]);
        });

        view()->composer('test', function ($view) {
            $view->with(['page' => Page::find(1),  'navigation' => Navigation::with('seoPages')->where('route_name', Route::current()->getName())->first()]);
        });

        Paginator::useBootstrapFive();
    }
}
