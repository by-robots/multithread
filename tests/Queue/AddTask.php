<?php

namespace ByRobots\Multithread\Tests\Queue;

use Mockery;
use ByRobots\Multithread\Queue\Queue;
use ByRobots\Multithread\Tests\TestCase;
use ByRobots\Multithread\Tasks\TaskInterface;

class AddTask extends TestCase
{
    public function testAddingTask()
    {
        $queue = new Queue;
        $task = Mockery::mock(TaskInterface::class);

        $queue->addTask($task, 1);
        $queue = $queue->retrieve();

        $this->assertEquals(1, count($queue));
    }

    public function testAddingAnotherTask()
    {
        $queue = new Queue;
        $taskOne = Mockery::mock(TaskInterface::class);
        $taskTwo = Mockery::mock(TaskInterface::class);

        $queue->addTask($taskOne, 1);
        $queue->addTask($taskTwo, 1);
        $queue = $queue->retrieve();

        $this->assertEquals(2, count($queue));
    }
}
