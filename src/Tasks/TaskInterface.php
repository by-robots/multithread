<?php

namespace ByRobots\Multithread\Tasks;

interface TaskInterface
{
    /**
     * Begin execution.
     *
     * @return mixed
     */
    public function process();
}
