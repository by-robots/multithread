<?php

namespace ByRobots\ManyPies\Tests\Queues;

use ByRobots\ManyPies\Queues\Queue;
use ByRobots\ManyPies\Tasks\TaskInterface;
use ByRobots\ManyPies\Tests\TestCase;
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
