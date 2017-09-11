<?php

namespace ByRobots\Multithread\Runner;

class Runner implements RunnerInterface
{
    /**
     * Contain the tasks.
     *
     * @var array
     */
    private $tasks;

    /**
     * Set the task list to run.
     *
     * @param array $tasks
     *
     * @return void
     */
    public function setTaskList(array $tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * Run the task list.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
