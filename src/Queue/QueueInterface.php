<?php

namespace ByRobots\Multithread\Queue;

use ByRobots\Multithread\Tasks\TaskInterface as Task;

interface QueueInterface
{
    /**
     * Add a task to the queue.
     *
     * @param ByRobots\Multithread\Tasks\TaskInterface $task
     * @param int $times Number of times to add the task.
     *
     * @return void
     */
    public function addTask(Task $task, $times);

    /**
     * Retrieve the queue.
     *
     * @return array
     */
    public function retrieve();

    /**
     * Clear the queue.
     *
     * @return avoid
     */
    public function clear();
}
