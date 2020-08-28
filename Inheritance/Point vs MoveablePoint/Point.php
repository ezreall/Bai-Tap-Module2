<?php


class Point
{
    protected $x;
    protected $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return $float = array($this->x,$this->y);
    }

    public function toString()
    {
        echo "(".$this->x.",".$this->y.")";
    }
}