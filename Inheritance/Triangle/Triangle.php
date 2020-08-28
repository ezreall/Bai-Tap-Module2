<?php


class Triangle
{
    public $side1;
    public $side2;
    public $side3;

    public function __construct($side1,$side2,$side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    /**
     * @return mixed
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param mixed $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return mixed
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param mixed $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return mixed
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param mixed $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getArea()
    {
        return (sqrt(($this->side1 + $this->side2 + $this->side3) * ($this->side1 + $this->side2 - $this->side3) * ($this->side2 + $this->side3 - $this->side1) * ($this->side3 + $this->side1 - $this->side2)))/4;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function __toString()
    {
        return "Area: ".$this->getArea()."<br>Perimeter: ".$this->getPerimeter();
    }
}