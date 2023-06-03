<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrajetPageController extends AbstractController
{
    #[Route('/trajet_page', name: 'app_trajet_page')]
    public function index(): Response
    {
        return $this->render('trajet_page/index.html.twig', [
            'controller_name' => 'TrajetPageController',
        ]);
    }
}
