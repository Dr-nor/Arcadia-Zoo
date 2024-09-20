<?php

namespace App\Controller\Admin;

use App\Entity\Habitatreport;
use App\Form\HabitatreportType;
use App\Repository\HabitatreportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

#[Route('admin/habitatreport')]
class HabitatreportController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    #[Route('/', name: 'app_habitatreport_index', methods: ['GET'])]
    public function index(HabitatreportRepository $habitatreportepository): Response
    {
        return $this->render('admin/habitatreport/index.html.twig', [
            'habitatreports' => $habitatreportepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_habitatreport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Habitatreport = new Habitatreport();
        $form = $this->createForm(HabitatreportType::class, $Habitatreport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On attribue l'utilisateur
            $Habitatreport->setUser($this->getUser());
            
            // On stock
            $entityManager->persist($Habitatreport);
            $entityManager->flush();
            $this->addFlash('success', 'Rapport ajoutée avec succès');
            return $this->redirectToRoute('app_habitatreport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/habitatreport/new.html.twig', [
            'habitatreport' => $Habitatreport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habitatreport_show', methods: ['GET'])]
    public function show(Habitatreport $Habitatreport): Response
    {
        return $this->render('admin/habitatreport/show.html.twig', [
            'habitatreport' => $Habitatreport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_habitatreport_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habitatreport $Habitatreport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HabitatreportType::class, $Habitatreport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Rapport modifiée avec succès');

            return $this->redirectToRoute('app_habitatreport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/habitatreport/edit.html.twig', [
            'habitatreport' => $Habitatreport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habitatreport_delete', methods: ['POST'])]
    public function delete(Request $request, Habitatreport $Habitatreport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Habitatreport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Habitatreport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habitatreport_index', [], Response::HTTP_SEE_OTHER);
    }

}
