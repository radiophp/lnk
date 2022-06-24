<?php

namespace App\Service;

class Circle
{
    private float $radius;

    public function setRadius($radius)
    {
       $this->radius = $radius;
    }
    public function getRadius():float
    {
        return $this->radius;
    }
    public function getSurface() :float
    {
        return  pi() * pow($this->radius, 2);
    }
    public function getCircumference() :float
    {
        return 2 * pi() * $this->radius;
    }
}