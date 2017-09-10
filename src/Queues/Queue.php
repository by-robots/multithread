<?php

namespace ByRobots\Multithread\Queues;

use ByRobots\Multithread\Tasks\TaskInterface as Task;

class Queue extends AbstractQueue
{
    /**
     * Add a task to the queue.
     *
     * @param ByRobots\Multithread\Tasks\TaskInterface $task
     * @param int $times Number of times to add the task. Defaults to 1.
     *
     * @return void
     */
    public function addTask(Task $task, $times = 1)
    {
        $index = 0;
        while ($index < $times) {
            $this->queue[] = $task;
            $index ++;
        }
    }
}
