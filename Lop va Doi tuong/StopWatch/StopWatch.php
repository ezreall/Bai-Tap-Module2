<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    public function __construct()
    {
        $this->startTime = time() +  microtime();
    }

    public function start()
    {
        $this->startTime = time() + microtime();
    }

    public function stop()
    {
        $this->endTime = time() + microtime();
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
