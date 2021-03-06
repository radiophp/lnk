<?php

namespace App\Service;

use App\Service\Circle;
use App\Service\Triangle;
use JetBrains\PhpStorm\ArrayShape;
use Symfony\Component\Config\Definition\Exception\Exception;

class GeometryCalculator
{
    var \App\Service\Circle $circle;
    var \App\Service\Triangle $triangle;

    function __construct(Circle $circle, Triangle $triangle)
    {
        $this->circle = $circle;
        $this->triangle = $triangle;;
    }

    #[ArrayShape(['sum' => "mixed", 'errorCount' => "int"])]
    public function calculator(array $parameters, string $mode): array   // $mode => []
    {
        $mode = ucfirst($mode);
        $shapeTypes = ['circle', 'triangle'];
        $areaSum = 0;
        foreach ($parameters as $shape) {
            if (strtolower($shape['type']) == 'circle') {
                $this->circle->setRadius($shape['radius']);
                $areaSum += $this->circle->{'get' . $mode}();
            } elseif (strtolower($shape['type']) == 'triangle') {
                $this->triangle->setSides($shape['a'], $shape['b'], $shape['c']);
                $areaSum += $this->triangle->{'get' . $mode}();
            } else {
                throw new Exception('Invalid shape TYPE : ' . $shape['type']);
            }
        }
        return [
            'sum' => $areaSum
        ];
    }
}
