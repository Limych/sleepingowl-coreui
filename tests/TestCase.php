<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Tests;

use Illuminate\Support\ServiceProvider;
use Limych\SleepingOwlCoreUI\Facades\CoreUIFacade;
use Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{

    /**
     * Load package service provider.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return ServiceProvider[]
     */
    protected function getPackageProviders($app)
    {
        return [CoreUIServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'CoreUI' => CoreUIFacade::class,
        ];
    }
}
