<?php
include_once "Dancer.php";

class Manager
{
    public $maleQueue;
    public $femaleQueue;
    public $couples;

    public function __construct()
    {
        $this->maleQueue = new SplQueue();
        $this->femaleQueue = new SplQueue();
        $this->couples = [];
    }

    public function addDancer($dancer)
    {
        if ($dancer->gender == 'male'){
            $this->maleQueue->enqueue($dancer);
        } else {
            $this->femaleQueue->enqueue($dancer);
        }
    }

    public function setCouple()
    {
        $arr = [$this->maleQueue->dequeue(),$this->femaleQueue->dequeue()];
        array_push($this->couples,$arr);
    }

    public function showCouples()
    {
        return $this->couples;
    }
}