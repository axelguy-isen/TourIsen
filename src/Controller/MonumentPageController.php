<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonumentPageController extends AbstractController
{
    #[Route('/monuments', name: 'app_monument_page')]
    public function index(): Response
    {
        return $this->render('monuments/index.html.twig', [
            'controller_name' => 'MonumentPageController',
        ]);
    }
}
