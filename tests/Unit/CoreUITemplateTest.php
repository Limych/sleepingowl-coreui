<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>.
 */

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Limych\SleepingOwlCoreUI\Templates\CoreUITemplate;

class CoreUITemplateTest extends TestCase
{
    /**
     * @var CoreUITemplate
     */
    protected $template;

    /**
     * Sets up the fixture.
     */
    protected function setUp()
    {
        parent::setUp();
    }

    public function testName()
    {
        $this->assertStringStartsWith('CoreUI', $this->template->name());
    }
}
