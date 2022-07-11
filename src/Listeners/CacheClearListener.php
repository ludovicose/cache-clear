<?php

declare(strict_types=1);

namespace Spark\CacheClear\Listeners;

use Spark\CacheClear\Commands\ClearCacheCommand;

final class CacheClearListener
{
    public function handle($event): void
    {
        dispatch(new ClearCacheCommand());
    }
}
