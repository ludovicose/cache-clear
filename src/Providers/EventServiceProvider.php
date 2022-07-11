<?php

declare(strict_types=1);

namespace Spark\CacheClear\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Spark\CacheClear\Listeners\CacheClearListener;

final class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'gateway.cache.cleared' => [
            CacheClearListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
