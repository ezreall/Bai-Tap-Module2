<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($obj)
    {
        if (count($this->stack) < $this->limit)
            array_unshift($this->stack,$obj);
        else
            throw new RuntimeException('stack is full');
    }

    public function pop()
    {
        if ($this->isEmpty())
            throw new RuntimeException('stack is empty');
        else
            array_shift($this->stack);
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}