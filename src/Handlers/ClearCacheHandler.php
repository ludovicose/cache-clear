<?php

declare(strict_types=1);

namespace Spark\CacheClear\Handlers;

use Illuminate\Support\Facades\Artisan;

final class ClearCacheHandler
{
    public function handle(): void
    {
        Artisan::call('optimize:clear');
    }
}
