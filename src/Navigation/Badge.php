<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>.
 */

namespace Limych\SleepingOwlCoreUI\Navigation;

class Badge extends \SleepingOwl\Admin\Navigation\Badge
{
    /**
     * @return array
     */
    public function toArray()
    {
        $value = $this->getValue();

        if (! $this->hasClassProperty('badge-', 'bg-')) {
            $this->setHtmlAttribute('class', 'badge badge-primary');
        }

        return [
            'value'      => $value,
            'attributes' => $this->htmlAttributesToString(),
        ];
    }
}
