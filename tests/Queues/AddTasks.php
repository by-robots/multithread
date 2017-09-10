<?php

namespace ByRobots\ManyPies\Tests\Queues;

use ByRobots\ManyPies\Queues\Queue;
use ByRobots\ManyPies\Tasks\TaskInterface;
use ByRobots\ManyPies\Tests\TestCase;
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
