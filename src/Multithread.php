<?php

namespace ByRobots\Multithread;

use ByRobots\Multithread\Queue\Queue;
use ByRobots\Multithread\Queue\QueueInterface;
use ByRobots\Multithread\Runner\Runner;
use ByRobots\Multithread\Runner\RunnerInterface;
use ByRobots\Multithread\Tasks\TaskInterface;

class Multithread
{
    /**
     * The queue.
     *
     * @var ByRobots\Multithread\Queue\QueueInterface
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
    public function __construct(QueueInterface $queue = null, RunnerInterface $runner = null)
    {
        $this->queue  = !$queue  ? new Queue  : $queue;
        $this->runner = !$runner ? new Runner : $runner;
    }

    /**
     * Add a task to the queue.
     *
     * @param ByRobots\Multithread\Tasks\TaskInterface $task
     * @param int $times Number of times to add the task. Defaults to 1.
     */
    public function addTask(TaskInterface $task, $times = 1)
    {
        $this->queue->addTask($task, $times);
    }

    /**
     * Runs the task list.
     *
     * @return void
     */
    public function fork()
    {
        $this->runner->setTaskList($this->queue->retrieve());
        $this->runner->run();
    }
}
