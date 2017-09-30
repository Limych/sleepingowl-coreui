<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Limych\SleepingOwlCoreUI\Providers;

use Illuminate\Support\ServiceProvider;
use Limych\SleepingOwlCoreUI\Templates\CoreUITemplate;

class CoreUIServiceProvider extends ServiceProvider
{

    const ASSETS_URL = 'packages/sleepingowl/coreui/';

    protected $package_dir;

    /**
     * Create a new service provider instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);

        $this->package_dir = dirname(dirname(__DIR__));
    }

    /**
     * Register bindings in the package.
     */
    public function register()
    {
        $this->app->alias(CoreUITemplate::class, 'coreui');

        $this->mergeConfigFrom($this->package_dir . '/config/coreui.php', 'coreui');
    }

    /**
     * Bootstrap package services.
     */
    public function boot()
    {
        $this->loadViewsFrom($this->package_dir . '/resources/views', 'coreui');

        // Publish configs
        $this->publishes([
            $this->package_dir . '/config/coreui.php' => config_path('coreui.php'),
        ], 'config');

        // Publish assets
        $this->publishes([
            $this->package_dir . '/public/' => public_path(self::ASSETS_URL),
        ], 'public');
    }

}
