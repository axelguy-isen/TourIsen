<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\ParcsJardinsLilleHellemmesLommeEmprise;

class ApiController extends AbstractController
{
    
    #[Route('/api/parcs', name:'api_test' ,method: 'GET' )]
     
    public function getParcs(EntityManagerInterface $entityManager): JsonResponse
    {
        $parcRepository = $entityManager->getRepository(ParcsJardinsLilleHellemmesLommeEmprise::class);
        $parcs = $parcRepository->findAll();

        $serializedParcs = [];
        foreach ($parcs as $parc) {
            $serializedParcs[] = [
                'identifiant' => $parc->getIdentifiant(),
                'nomDusage' => $parc->getNomDusage(),
                'quartierOuCommuneAssociee' => $parc->getQuartierOuCommuneAssociée(),
                'type' => $parc->getType(),
                // Ajoutez d'autres champs selon vos besoins
            ];
        }

        return new JsonResponse($serializedParcs);
    }
}
