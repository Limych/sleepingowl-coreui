<?php
/**
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

namespace Tests\Unit;

use Limych\SleepingOwlCoreUI\Templates\CoreUITemplate;
use PHPUnit\Framework\TestCase;

class CoreUITemplateTest extends TestCase
{

    /**
     * @var CoreUITemplate
     */
    protected $template;

    /**
     * Sets up the fixture
     */
    protected function setUp()
    {
        parent::setUp();
    }

    /**
     *
     */
    public function testName()
    {
        $this->assertStringStartsWith('CoreUI', $this->template->name());
    }
}
