<?php

namespace App\Controller;

use App\Service\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius<\d+>}', name: 'app_circle')]
    public function index(Circle $Circle,Request $request): JsonResponse
    {

        $Circle->setRadius( $request->attributes->getDigits('radius') );
        $return_array = [
            'type'          =>  'circle',
            'radius'        =>  $Circle->getRadius(),
            'surface'       =>  $Circle->getSurface(),
            'circumference' =>  $Circle->getCircumference()
        ];
        return $this->json($return_array);
    }
}
