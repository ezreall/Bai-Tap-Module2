<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getArea()
    {
        return pi() * pow($this->radius,2);
    }

    public function toString()
    {
        echo "Radius: ".$this->radius."<br> Color: ".$this->color;
    }
}