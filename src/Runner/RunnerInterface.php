<?php

namespace ByRobots\Multithread\Runner;

interface RunnerInterface
{
    /**
     * Set the task list to run.
     *
     * @param array $tasks
     *
     * @return void
     */
    public function setTaskList(array $tasks);

    /**
     * Run the task list.
     *
     * @return void
     */
    public function run();
}
