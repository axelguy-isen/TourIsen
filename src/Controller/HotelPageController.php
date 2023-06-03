<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotelPageController extends AbstractController
{
    #[Route('/hotel_page', name: 'app_hotel_page')]
    public function index(): Response
    {
        return $this->render('hotel_page/index.html.twig', [
            'controller_name' => 'HotelPageController',
        ]);
    }
}
