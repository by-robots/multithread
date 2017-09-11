<?php

use ByRobots\Multithread\Tasks\TaskInterface;

/**
 * Finds the first 10000 prime numbers.
 */
class Primes implements TaskInterface
{
    /**
     * O(n^2) in case you're interested.
     */
    public function process()
    {
        $primeNumbers = [];
        for ($i = 1; $i <= 10000; $i++) {
            $counter = 0;

            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $counter++;
                }
            }

            if ($counter == 2) {
                $primeNumbers[] = $i; // store value to array
            }
        }
    }
}
