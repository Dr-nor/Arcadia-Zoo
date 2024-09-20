<?php

namespace App\Controller\Admin;

use App\Entity\Dailydiet;
use App\Form\DailydietType;
use App\Repository\DailydietRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('admin/dailydiet')]
class DailydietController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    #[Route('/', name: 'app_dailydiet_index', methods: ['GET'])]
    public function index(DailydietRepository $dailydietepository): Response
    {
        return $this->render('admin/dailydiet/index.html.twig', [
            'dailydiets' => $dailydietepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_dailydiet_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Dailydiet = new Dailydiet();
        $form = $this->createForm(DailydietType::class, $Dailydiet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On attribue l'utilisateur
            $Dailydiet->setUser($this->getUser());
            
            // On stock
            $entityManager->persist($Dailydiet);
            $entityManager->flush();
            $this->addFlash('success', 'alimentation ajoutée avec succès');
            return $this->redirectToRoute('app_dailydiet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/dailydiet/new.html.twig', [
            'dailydiet' => $Dailydiet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dailydiet_show', methods: ['GET'])]
    public function show(Dailydiet $Dailydiet): Response
    {
        return $this->render('admin/dailydiet/show.html.twig', [
            'dailydiet' => $Dailydiet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_dailydiet_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Dailydiet $Dailydiet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DailydietType::class, $Dailydiet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Alimentation modifiée avec succès');

            return $this->redirectToRoute('app_dailydiet_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/dailydiet/edit.html.twig', [
            'dailydiet' => $Dailydiet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dailydiet_delete', methods: ['POST'])]
    public function delete(Request $request, Dailydiet $Dailydiet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Dailydiet->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Dailydiet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_dailydiet_index', [], Response::HTTP_SEE_OTHER);
    }

}
