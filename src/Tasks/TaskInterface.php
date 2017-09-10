<?php

namespace ByRobots\ManyPies\Tasks;

interface TaskInterface
{
    /**
     * Begin execution.
     *
     * @return mixed
     */
    public function process();
}
