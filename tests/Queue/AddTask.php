<?php

namespace ByRobots\Multithread\Tests\Queue;

use ByRobots\Multithread\Queue\Queue;
use ByRobots\Multithread\Tasks\TaskInterface;
use ByRobots\Multithread\Tests\TestCase;
use Mockery;

class AddTask extends TestCase
{
    public function testAddingTask()
    {
        $queue = new Queue;
        $task  = Mockery::mock(TaskInterface::class);

        $queue->addTask($task);
        $queue = $queue->retrieve();

        $this->assertEquals(1, count($queue));
    }

    public function testAddingAnotherTask()
    {
        $queue   = new Queue;
        $taskOne = Mockery::mock(TaskInterface::class);
        $taskTwo = Mockery::mock(TaskInterface::class);

        $queue->addTask($taskOne);
        $queue->addTask($taskTwo);
        $queue = $queue->retrieve();

        $this->assertEquals(2, count($queue));
    }
}
