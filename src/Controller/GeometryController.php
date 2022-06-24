<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\GeometryCalculator;


class GeometryController extends AbstractController
{
    #[Route('/geometry', name: 'app_geometry' ,methods: 'GET'  )]
    public function index(Request $request ): JsonResponse
    {

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GeometryController.php',
        ]);
    }

    #[Route('/geometry/{shapeMode}', name: 'app_geometry_new' ,methods: 'POST'  )]
    public function Sum(Request $request ,GeometryCalculator $GC): Response
    {
        $parameters = json_decode($request->getContent(), true);
        $reqType = $request->attributes->get('shapeMode');

        return $this->json( $GC->calculator($parameters,$reqType) );
    }
   /* #[Route('/geometry/surface_sum', name: 'app_geometry_new' ,methods: 'POST'  )]
    public function surfaceSum(Request $request ,GeometryCalculator $GC): Response
    {
        $parameters = json_decode($request->getContent(), true);
        return $this->json( $GC->calculator($parameters,'surface') );
    }*/
}
