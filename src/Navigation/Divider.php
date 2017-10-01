<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

/**
 * Created by PhpStorm.
 * User: Limych
 * Date: 30.09.2017
 * Time: 19:29
 */

namespace Limych\SleepingOwlCoreUI\Navigation;

class Divider extends Section
{

    /**
     * Divider constructor.
     */
    public function __construct()
    {
        parent::__construct();

        parent::setTitle('* * *');
    }
}
