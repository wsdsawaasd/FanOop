<?php


class Fan
{
    public $Slow = 1;
    public $Medium = 2;
    public $Fast = 3;
    private $speed = 1;
    private $status = false;
    private $radius = 5;
    private $color = "blue";

    function __construct($Slow, $Medium, $Fast, $speed, $status, $radius, $color)
    {
        $this->Slow = $Slow;
        $this->Medium = $Medium;
        $this->Fast = $Fast;
        $this->speed = $speed;
        $this->status = $status;
        $this->radius = $radius;
        $this->color = $color;
    }

    function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getSpeed()
    {
        return $this->speed;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function getColor()
    {
        return $this->color;
    }

    function toString()
    {
        if ($this->status === true) {
            return "Fan is on: " . " TOc do = " . $this->speed . " Mau = " . $this->color . "  ban ki nh = " . $this->radius ;
         } else {
            return "Fan is of: " . " mau  = " . $this->color . " ;  ban ki nh = " . $this->radius ;
        }
    }

}