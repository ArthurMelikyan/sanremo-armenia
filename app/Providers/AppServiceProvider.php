<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\IconCategory;
use App\Sponsor;
use App\Founder;
use App\Follow;
use App\Footer;
class AppServiceProvider extends ServiceProvider
{ 
    public function boot()
    {
        \Schema::defaultStringLength(191);

        view()->composer('layouts.icon_categories', function ($view) {
            $view->with('icon_categories', IconCategory::orderBy('id', 'desc')
                ->take(4)->get(['icon','category_text','show','link']));
        });
        view()->composer('layouts.sponsors', function ($view) {
            $view->with('sponsors', Sponsor::orderBy('id', 'desc')
                ->take(4)->get(['sponsor_name','sponsor_image','link']));
        });
        view()->composer('layouts.founder', function ($view) {
            $view->with('founder', Founder::latest()
                ->first());
        });
        view()->composer('layouts.follow', function ($view) {
            $view->with('follows', Follow::orderBy('id', 'desc')
                ->take(4)
                ->get(['title','icon','link','show']));
        });
        view()->composer('layouts.footer', function ($view) {
            $view->with('footer', Footer::latest()->first());
        });

     }
 
    public function register()
    {
        //
    }
}
