<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GeometryController extends AbstractController
{
    #[Route('/geometry', name: 'app_geometry' ,methods: 'POST'  )]
    public function index(Request $request): JsonResponse
    {
        var_dump($request->get('type'));
        die("asdas");
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GeometryController.php',
        ]);
    }
}
