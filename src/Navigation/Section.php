<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>.
 */

namespace Limych\SleepingOwlCoreUI\Navigation;

use Psy\Exception\DeprecatedException;
use SleepingOwl\Admin\Navigation\Page;

class Section extends Page
{
    /**
     * @param string $url
     * @return $this|void
     * @throws DeprecatedException
     * @deprecated Method not implemented for this class.
     */
    public function setUrl($url)
    {
        throw new DeprecatedException('Method '.__METHOD__.' not implemented.');
    }

    /**
     * @return null
     */
    public function getUrl()
    {
    }
}
