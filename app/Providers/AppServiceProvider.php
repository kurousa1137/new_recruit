<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LoginService;
use App\Services\LogoutService;
use App\Services\ListService;
use App\Services\StoreService;
use App\Services\UpdateService;
use App\Services\DeleteService;
use App\Services\DetailService;
use App\Services\AtsService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind('login', LoginService::class);
      $this->app->bind('logout', LogoutService::class);
      $this->app->bind('store', StoreService::class);
      $this->app->bind('update', UpdateService::class);
      $this->app->bind('index', ListService::class);
      $this->app->bind('delete', DeleteService::class);
      $this->app->bind('detail', DetailService::class);
      $this->app->bind('ats', AtsService::class);
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
