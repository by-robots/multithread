<?php

use ByRobots\Multithread\Tasks\TaskInterface;

/**
 * Hash 250 random numbers.
 */
class Hash implements TaskInterface
{
    public function process()
    {
        for ($i = 0; $i < 250; $i++) {
            password_hash((string) mt_rand(1, 1000000000), PASSWORD_BCRYPT);
        }
    }
}
