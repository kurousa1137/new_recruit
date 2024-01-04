<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ListService;
use App\Services\StoreService;
use App\Services\UpdateService;
use App\Services\DeleteService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('store', StoreService::class);
      $this->app->bind('update', UpdateService::class);
      $this->app->bind('index', ListService::class);
      $this->app->bind('delete', DeleteService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
