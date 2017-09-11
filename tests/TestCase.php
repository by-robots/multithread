<?php

namespace ByRobots\Multithread\Tests;

use ByRobots\Multithread\Multithread;
use Mockery;
use \Mockery\Adapter\Phpunit\MockeryTestCase;

abstract class TestCase extends MockeryTestCase
{
    public function tearDown()
    {
        Mockery::close();
    }
}
