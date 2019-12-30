<?php

namespace App\Providers;

use App\Resources\Users;
use Gruter\ResourceViewer\Facades\Resource;
use Gruter\ResourceViewer\ResourceServiceProvider as ServiceProvider;

class ResourceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        Resource::register([
            Users::class,
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
