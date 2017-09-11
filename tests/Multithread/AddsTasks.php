<?php

namespace ByRobots\Multithread\Tests\Multithread;

use ByRobots\Multithread\Multithread;
use ByRobots\Multithread\Queue\QueueInterface;
use ByRobots\Multithread\Runner\RunnerInterface;
use ByRobots\Multithread\Tasks\TaskInterface;
use ByRobots\Multithread\Tests\TestCase;
use Mockery;

class SetTasks extends TestCase
{
    public function testAddsTask()
    {
        $task   = Mockery::mock(TaskInterface::class);
        $runner = Mockery::mock(RunnerInterface::class);
        $queue  = Mockery::mock(QueueInterface::class);

        $queue->shouldReceive('addTask')->with($task, 1)->once();

        $multithread = new Multithread($queue, $runner);
        $multithread->addTask($task);
    }

    public function testAddsTasks()
    {
        $task   = Mockery::mock(TaskInterface::class);
        $runner = Mockery::mock(RunnerInterface::class);
        $queue  = Mockery::mock(QueueInterface::class);

        $queue->shouldReceive('addTask')->with($task, 5)->once();

        $multithread = new Multithread($queue, $runner);
        $multithread->addTask($task, 5);
    }
}
