<?php


class MyList
{
    public $size;
    public $arrayList;

    public function __construct($size)
    {
        $this->arrayList = array();
        $this->size = $size;
    }

    public function insert($index, $obj)
    {
        if (count($this->arrayList) < $this->size)
        $this->arrayList[$index] = $obj;
        else echo "khong the them phan tu vao list";
    }

    public function add($obj)
    {
        if (count($this->arrayList) < $this->size)
            array_push($this->arrayList, $obj);
        else echo "khong the them phan tu vao list";

    }

    public function remove($index)
    {
        array_splice($this->arrayList, $index, 1);
    }

    public function get($index)
    {
        return $this->arrayList[$index];
    }

    public function clear()
    {
        array_splice($this->arrayList, 0);
    }

    public function addAll($arr)
    {
        return array_merge($this->arrayList, $arr);
    }

    public function indexOf($obj)
    {
        return array_search($obj, $this->arrayList);
    }

    public function isEmpty()
    {
        if (count($this->arrayList) == 0)
            return true;
        else
            return false;
    }

    public function sort()
    {
        sort($this->arrayList);
    }

    public function reset()
    {

    }

    public function size()
    {
        return $this->size;
    }
}