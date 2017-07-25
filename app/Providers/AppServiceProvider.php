<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\Factory as ViewFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ViewFactory $view)
    {
          \Schema::defaultStringLength(191);
           $view->composer('auth.partials.forms.product', 'App\Http\Views\Composers\ProductFromComposer');
           $view->composer('layouts.master', 'App\Http\Views\Composers\ProductFromComposer');
           // $brand = App\Brand::all();
           // View::share('brand', $brand);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
