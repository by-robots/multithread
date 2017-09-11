<?php

namespace ByRobots\Multithread\Queue;

use ByRobots\Multithread\Tasks\TaskInterface as Task;

class Queue implements QueueInterface
{
    /**
     * Contains the tasks to run.
     *
     * @var array
     */
    private $queue;

    /**
     * Add a task to the queue.
     *
     * @param ByRobots\Multithread\Tasks\TaskInterface $task
     * @param int $times Number of times to add the task.
     *
     * @return void
     */
    public function addTask(Task $task, $times)
    {
        for ($index = 0; $index < $times; $index++) {
            $this->queue[] = $task;
        }
    }

    /**
     * Retrieve the queue.
     *
     * @return array
     */
    public function retrieve()
    {
        return $this->queue;
    }

    /**
     * Clear the queue.
     *
     * @return avoid
     */
    public function clear()
    {
        $this->queue = [];
    }
}
