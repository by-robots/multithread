<?php

namespace ByRobots\Multithread\Tests\Multithread;

use Mockery;
use ByRobots\Multithread\Multithread;
use ByRobots\Multithread\Tests\TestCase;
use ByRobots\Multithread\Tasks\TaskInterface;
use ByRobots\Multithread\Queue\QueueInterface;
use ByRobots\Multithread\Runner\RunnerInterface;

class RunsTasks extends TestCase
{
    public function testRunsTasks()
    {
        $task   = Mockery::mock(TaskInterface::class);
        $runner = Mockery::mock(RunnerInterface::class);
        $queue  = Mockery::mock(QueueInterface::class);

        $queue->shouldReceive('retrieve')->once()->andReturn([$task]);
        $runner->shouldReceive('setTaskList')->once()->with([$task]);
        $runner->shouldReceive('run')->once();

        $multithread = new Multithread($queue, $runner);
        $multithread->fork();
    }
}
