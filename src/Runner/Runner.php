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
        $pids = [];
        foreach ($this->tasks as $key => $task) {
            $pids[$key] = pcntl_fork();

            if (!$pids[$key]) {
                $task->process();

                if (!defined('IN_PHPUNIT') or !IN_PHPUNIT) {
                    // It's ugly but if we exit in PHPUnit then the tests stop.
                    // Need to do it in the wild, though, hence setting a
                    // constant to be checked when testing.
                    exit;
                }
            }
        }

        for ($i = 0; $i < count($pids); $i++) {
            pcntl_waitpid($pids[$i], $status, WUNTRACED);
        }

        return;
    }
}
