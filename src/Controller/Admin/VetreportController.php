<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use App\Entity\Vetreport;
use App\Form\VetreportType;
use App\Repository\VetreportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('admin/vetreport')]
class VetreportController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    #[Route('/', name: 'app_vetreport_index', methods: ['GET'])]
    public function index(VetreportRepository $vetreportepository): Response
    {
        return $this->render('admin/vetreport/index.html.twig', [
            'vetreports' => $vetreportepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_vetreport_new', methods: ['GET', 'POST'])]
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
            return $this->redirectToRoute('app_vetreport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/vetreport/new.html.twig', [
            'vetreport' => $Vetreport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vetreport_show', methods: ['GET'])]
    public function show(Vetreport $Vetreport): Response
    {
        return $this->render('admin/vetreport/show.html.twig', [
            'vetreport' => $Vetreport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_vetreport_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vetreport $Vetreport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VetreportType::class, $Vetreport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Rapport modifiée avec succès');

            return $this->redirectToRoute('app_vetreport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/vetreport/edit.html.twig', [
            'vetreport' => $Vetreport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vetreport_delete', methods: ['POST'])]
    public function delete(Request $request, Vetreport $Vetreport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Vetreport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Vetreport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vetreport_index', [], Response::HTTP_SEE_OTHER);
    }

}
