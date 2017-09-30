<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Limych\SleepingOwlCoreUI\Providers;

use Illuminate\Support\ServiceProvider;

class CoreUiServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the package.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap package services.
     */
    public function boot()
    {
        $root = dirname(dirname(__DIR__));

        $this->loadViewsFrom($root . '/resources/views', 'coreui');

//        if ($this->app->runningInConsole()) {
//            $this->publishes([
//                $root . '/public/' => public_path('packages/sleepingowl/coreui-template/'),
//            ], 'assets-coreui');
//        }
    }

}
