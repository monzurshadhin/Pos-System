<?php

namespace App\Providers;

use App\Models\PurchaseOrder;
use Illuminate\Support\ServiceProvider;
use View;

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
        //
        View::composer('dashboard.includes.header',function ($view){
            $view->with('orders',PurchaseOrder::all());
        });
    }
}
