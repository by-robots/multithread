<?php

namespace ByRobots\Multithread\Tests\Queue;

use ByRobots\Multithread\Queue\Queue;
use ByRobots\Multithread\Tasks\TaskInterface;
use ByRobots\Multithread\Tests\TestCase;
use Mockery;

class AddTasks extends TestCase
{
    public function testAddingTasks()
    {
        $queue = new Queue;
        $task  = Mockery::mock(TaskInterface::class);

        $queue->addTask($task, 5);
        $queue = $queue->retrieve();

        $this->assertEquals(5, count($queue));
    }
}
