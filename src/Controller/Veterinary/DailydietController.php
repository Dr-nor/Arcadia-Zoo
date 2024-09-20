<?php

namespace App\Controller\Veterinary;

use App\Entity\Dailydiet;
use App\Repository\DailydietRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

#[Route('veterinary/dailydiet')]
class DailydietController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    #[Route('/', name: 'vet_dailydiet_index', methods: ['GET'])]
    public function index(DailydietRepository $dailydietepository): Response
    {
        return $this->render('veterinary/dailydiet/index.html.twig', [
            'dailydiets' => $dailydietepository->findAll(),
        ]);
    }

  
    #[Route('/{id}', name: 'vet_dailydiet_show', methods: ['GET'])]
    public function show(Dailydiet $Dailydiet): Response
    {
        return $this->render('veterinary/dailydiet/show.html.twig', [
            'dailydiet' => $Dailydiet,
        ]);
    }

   

    #[Route('/{id}', name: 'vet_dailydiet_delete', methods: ['POST'])]
    public function delete(Request $request, Dailydiet $Dailydiet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Dailydiet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Dailydiet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vet_dailydiet_index', [], Response::HTTP_SEE_OTHER);
    }

}
