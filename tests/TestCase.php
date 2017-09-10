<?php

namespace ByRobots\Multithread\Tests;

use ByRobots\Multithread\Multithread;
use Mockery;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

abstract class TestCase extends PHPUnitTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }
}
