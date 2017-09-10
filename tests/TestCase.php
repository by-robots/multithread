<?php

namespace ByRobots\ManyPies\Tests;

use ByRobots\ManyPies\ManyPies;
use Mockery;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }
}
