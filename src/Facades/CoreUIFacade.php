<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>.
 */

namespace Limych\SleepingOwlCoreUI\Facades;

use Illuminate\Support\Facades\Facade;

class CoreUIFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'coreui';
    }
}
