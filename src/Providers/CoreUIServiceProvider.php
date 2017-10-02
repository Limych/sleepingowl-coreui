<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Limych\SleepingOwlCoreUI\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;
use Limych\SleepingOwlCoreUI\Templates\CoreUITemplate;

class CoreUIServiceProvider extends ServiceProvider
{

    const PACKAGE_NS = 'coreui';

    const ASSETS_URL = 'packages/sleepingowl/' . self::PACKAGE_NS . '/';

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
        $this->app->alias(CoreUITemplate::class, self::PACKAGE_NS);

        $this->mergeConfigFrom($this->package_dir . '/config/coreui.php', self::PACKAGE_NS);
    }

    /**
     * Bootstrap package services.
     */
    public function boot()
    {
        // Package configs
        $this->publishes([
            $this->package_dir . '/config/coreui.php' => config_path(self::PACKAGE_NS . '.php'),
        ], 'config');

        // Package views
        $this->loadViewsFrom($this->package_dir . '/resources/views', self::PACKAGE_NS);
        $this->publishes([
            $this->package_dir . '/resources/views' => resource_path('views/vendor/' . self::PACKAGE_NS),
        ]);

        // Package assets
        $this->publishes([
            $this->package_dir . '/public/' => public_path(self::ASSETS_URL),
        ], 'public');
        //
        // Publish package assets on first run
        if (config(self::PACKAGE_NS . '.publish_assets', true)
            && ! $this->app->runningInConsole() && ! file_exists(public_path(self::ASSETS_URL))
        ) {
            \Artisan::call('vendor:publish', [
                '--provider' => self::class,
                '--tag' => 'public',
            ]);
        }

        // Extending Blade
        Blade::directive('hasStack', function ($section) {
            return '<?php if(trim($__env->yieldPushContent(' . $section . '))): ?>';
        });
    }

}
