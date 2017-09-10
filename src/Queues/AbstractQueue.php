<?php

namespace ByRobots\ManyPies\Queues;

use ByRobots\ManyPies\Tasks\TaskInterface as Task;

abstract class AbstractQueue
{
    /**
     * Contains the tasks to run.
     *
     * @var array
     */
    protected $queue;

    /**
     * Add a task to the queue.
     *
     * @param ByRobots\ManyPies\Tasks\TaskInterface $task
     * @param int $times Number of times to add the task. Defaults to 1.
     *
     * @return void
     */
    abstract public function addTask(Task $task, $times = 1);

    /**
     * Retrieve the queue.
     *
     * @return array
     */
    public function retrieve()
    {
        return $this->queue;
    }
}
