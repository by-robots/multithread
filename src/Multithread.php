<?php

namespace ByRobots\Multithread;

use ByRobots\Multithread\Queues\AbstractQueue;
use ByRobots\Multithread\Queues\Queue;

class Multithread
{
    /**
     * The queue.
     *
     * @var ByRobots\Multithread\Queues\AbstractQueue
     */
    private $queue;

    /**
     * Set-up.
     *
     * @return void
     */
    public function __construct(AbstractQueue $queue = null)
    {
        $this->queue = !$queue ? new Queue : $queue;
    }
}
