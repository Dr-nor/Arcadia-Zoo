<?php

namespace App\Controller\Veterinary;

use App\Entity\Vetreport;
use App\Form\VetreportType;
use App\Repository\VetreportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

#[Route('veterinary/vetreport')]
class VetreportController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    #[Route('/', name: 'vet_vetreport_index', methods: ['GET'])]
    public function index(VetreportRepository $vetreportepository): Response
    {
        return $this->render('veterinary/vetreport/index.html.twig', [
            'vetreports' => $vetreportepository->findBy(['user'=> $this->getUser()]),
        ]);
    }

    #[Route('/new', name: 'vet_vetreport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Vetreport = new Vetreport();
        $form = $this->createForm(VetreportType::class, $Vetreport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On attribue l'utilisateur
            $Vetreport->setUser($this->getUser());
            
            // On stock
            $entityManager->persist($Vetreport);
            $entityManager->flush();
            $this->addFlash('success', 'Rapport ajoutée avec succès');
            return $this->redirectToRoute('vet_vetreport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('veterinary/vetreport/new.html.twig', [
            'vetreport' => $Vetreport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'vet_vetreport_show', methods: ['GET'])]
    public function show(Vetreport $Vetreport): Response
    {
        return $this->render('veterinary/vetreport/show.html.twig', [
            'vetreport' => $Vetreport,
        ]);
    }

    #[Route('/{id}/edit', name: 'vet_vetreport_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vetreport $Vetreport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VetreportType::class, $Vetreport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Rapport modifiée avec succès');

            return $this->redirectToRoute('vet_vetreport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('veterinary/vetreport/edit.html.twig', [
            'vetreport' => $Vetreport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'vet_vetreport_delete', methods: ['POST'])]
    public function delete(Request $request, Vetreport $Vetreport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Vetreport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Vetreport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vet_vetreport_index', [], Response::HTTP_SEE_OTHER);
    }

}
