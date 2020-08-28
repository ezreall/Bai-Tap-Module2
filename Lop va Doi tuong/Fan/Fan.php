<?php

class Fan
{
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = 1;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return false
     */
    public function getOn()
    {
        return $this->on;
    }

    /**
     * @param false $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this->on == true) {
            echo "Speed: " . $this->getSpeed() . "<br>" . "Color: " . $this->getColor() . "<br>" . "Radius: " . $this->getRadius() . "<br>" . "fan is on";
        } else {
            echo "Color: " . $this->getColor() . "<br>" . "Radius: " . $this->getRadius() . "<br>" . "fan is off";
        }
    }
}