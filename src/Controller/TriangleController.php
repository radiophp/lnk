<?php

namespace App\Controller;

use App\Service\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a<\d+>}/{b<\d+>}/{c<\d+>}', name: 'app_triangle')]
    public function index(Request $request, Triangle $triangle): JsonResponse
    {
        $params = $request->attributes->all()['_route_params'];
        $triangle->setSides($params['a'], $params['b'], $params['c']);
        $return_array = [
            'type' => 'triangle',
            'a' => $triangle->getSide('a'),
            'b' => $triangle->getSide('b'),
            'c' => $triangle->getSide('c'),
            'surface' => $triangle->getSurface(),
            'circumference' => $triangle->getCircumference()
        ];
        return $this->json($return_array);
    }
}
