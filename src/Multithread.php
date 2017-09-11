<?php

namespace ByRobots\Multithread;

use ByRobots\Multithread\Queues\AbstractQueue;
use ByRobots\Multithread\Queues\Queue;
use ByRobots\Multithread\Runner\Runner;
use ByRobots\Multithread\Runner\RunnerInterface;

class Multithread
{
    /**
     * The queue.
     *
     * @var ByRobots\Multithread\Queue\AbstractQueue
     */
    private $queue;

    /**
     * The task runner.
     *
     * @var ByRobots\Multithread\Runner\RunnerInterface
     */
    private $runner;

    /**
     * Set-up.
     *
     * @return void
     */
    public function __construct(AbstractQueue $queue = null, RunnerInterface $runner = null)
    {
        $this->queue  = !$queue  ? new Queue  : $queue;
        $this->runner = !$runner ? new Runner : $runner;
    }
}
