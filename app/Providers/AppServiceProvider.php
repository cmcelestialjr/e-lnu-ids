<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    public function register()
    {
        $this->app->bind('path.public', function (){
            return base_path().'/../../public_html/eids';
        });
    }
}
