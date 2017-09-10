<?php

namespace ByRobots\ManyPies\Tests;

use ByRobots\ManyPies\ManyPies;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    /**
     * Container for the manyPies object.
     *
     * @var ByRobots\ManyPies\ManyPies
     */
    protected $manyPies;

    /**
     * Set-up for testing.
     *
     * @return void
     */
    public function setUp()
    {
        $this->manyPies = new ManyPies;
    }
}
