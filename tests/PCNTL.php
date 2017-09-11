<?php

namespace ByRobots\Multithread\Runner;

/**
 * This file allows the global PCNTL methods to be mocked. This way the
 * Runner can be tested without relying on a PHP extension that may not be
 * available.
 */
function pcntl_fork()
{
    return false;
}

function pcntl_waitpid($pid, &$status)
{
    return true;
}
