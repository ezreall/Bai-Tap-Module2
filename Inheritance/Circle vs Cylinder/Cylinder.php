<?php


class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getArea()
    {
        return parent::getArea() * $this->height;
    }

    public function toString()
    {
        parent::toString();
        echo "<br>Height: ".$this->height;
    }
}