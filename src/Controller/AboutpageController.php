<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutpageController extends AbstractController
{
    #[Route('/aboutpage', name: 'app_aboutpage')]
    public function index(): Response
    {
        return $this->render('aboutpage/index.html.twig', [
            'controller_name' => 'AboutpageController',
        ]);
    }
}
