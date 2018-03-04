<?php

use ByRobots\Multithread\Tasks\TaskInterface;

/**
 * Finds the first 5000000 numbers in the Fibonacci sequence.
 */
class Fibonacci implements TaskInterface
{
    public function process()
    {
        $fibonacci = [0 , 1]; // Get the ball rolling
        while (count($fibonacci) < 5000000) {
            $index       = count($fibonacci);
            $fibonacci[] = $fibonacci[$index - 1] + $fibonacci[$index - 2];
        }
    }
}
