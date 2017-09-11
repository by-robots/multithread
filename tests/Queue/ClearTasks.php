<?php

namespace ByRobots\Multithread\Tests\Queue;

use ByRobots\Multithread\Queue\Queue;
use ByRobots\Multithread\Tasks\TaskInterface;
use ByRobots\Multithread\Tests\TestCase;
use Mockery;

class ClearTasks extends TestCase
{
    public function testClearingQueue()
    {
        $queue = new Queue;
        $task  = Mockery::mock(TaskInterface::class);

        $queue->addTask($task, 5);
        $queue->clear();
        $queue = $queue->retrieve();

        $this->assertEquals(0, count($queue));
    }
}
