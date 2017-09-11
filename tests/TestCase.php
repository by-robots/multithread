<?php

namespace ByRobots\Multithread\Tests;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;

abstract class TestCase extends MockeryTestCase
{
    public function setUp()
    {
        if (function_exists('\\ByRobots\\Multithread\\Runner\\pcntl_fork')) {
            require_once __DIR__ . '/PCNTL.php';
        }

        if (!defined('IN_PHPUNIT')) {
            define('IN_PHPUNIT', true);
        }
    }

    public function tearDown()
    {
        Mockery::close();
    }
}
