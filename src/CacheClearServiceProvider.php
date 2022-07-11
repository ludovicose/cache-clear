<?php

namespace Spark\CacheClear;

use Illuminate\Support\ServiceProvider;
use Spark\CacheClear\Providers\CommandBusServiceProvider;
use Spark\CacheClear\Providers\EventServiceProvider;

class CacheClearServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(CommandBusServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
