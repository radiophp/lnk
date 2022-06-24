<?php

namespace App\Service;

use JetBrains\PhpStorm\Pure;

class Triangle
{
    private float $sideA ,$sideB ,$sideC;

    public function setSides($sideA ,$sideB ,$sideC)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }
    public function getSide($side):float
    {
        return $this->{'side'.strtoupper($side)};
    }
    #[Pure] public function getSurface() :float
    {
        $half = $this->getCircumference() /2 ;
        return sqrt( $half * ($half - $this->sideA) * ($half - $this->sideB) * ($half - $this->sideC) );
    }
    public function getCircumference() :float
    {
        return $this->sideA + $this->sideB + $this->sideC;
    }
}