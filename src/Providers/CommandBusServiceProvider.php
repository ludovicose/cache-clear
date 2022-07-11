<?php

declare(strict_types=1);

namespace Spark\CacheClear\Providers;

use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;
use Spark\CacheClear\Commands\ClearCacheCommand;
use Spark\CacheClear\Handlers\ClearCacheHandler;

final class CommandBusServiceProvider extends ServiceProvider
{
    private array $maps = [
        ClearCacheCommand::class  => ClearCacheHandler::class,
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommandHandlers();
    }

    private function registerCommandHandlers()
    {
        Bus::map($this->maps);
    }
}
