<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\ParcsJardinsLilleHellemmesLommeEmprise;

class MonumentPageController extends AbstractController
{
    private $managerRegistry;

    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->managerRegistry = $managerRegistry;
    }

    #[Route('/monuments', name: 'app_monument_page')]
    public function index(): Response
    {
        $repository = $this->managerRegistry->getRepository(ParcsJardinsLilleHellemmesLommeEmprise::class);
        $monuments = $repository->findAll();

        $nomsUsages = [];
        foreach ($monuments as $monument) {
            $nomsUsages[] = $monument->getNomDusage();
        }

        return $this->render('monuments/index.html.twig', [
            'controller_name' => 'MonumentPageController',
            'nomsUsages' => $nomsUsages,
        ]);
    }
}
