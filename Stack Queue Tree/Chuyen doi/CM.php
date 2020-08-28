<?php


class Stack
{
    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($int)
    {
        array_push($this->stack,$int);
    }

    public function pop()
    {
        array_pop($this->stack);
    }

    public function convert($number)
    {
        while ($number == 1){
            $this->push($number%2);
            $number = ($number - $number%2)/2;
        }
    }

    public function show()
    {
        while (empty($this->stack)){
            echo $this->pop();
        }
    }
}