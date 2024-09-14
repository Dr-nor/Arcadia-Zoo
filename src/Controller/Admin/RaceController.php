<?php

namespace App\Controller\Admin;

use App\Entity\Race;
use App\Form\RaceType;
use App\Repository\RaceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('admin/race')]
class RaceController extends AbstractController
{
    #[Route('/', name: 'app_race_index', methods: ['GET'])]
    public function index(RaceRepository $raceRepository): Response
    {
        return $this->render('admin/race/index.html.twig', [
            'races' => $raceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_race_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $race = new Race();
        $form = $this->createForm(RaceType::class, $race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On génère le slug
            $slug = $slugger->slug($race->getName());
            $race->setSlug($slug);

            $entityManager->persist($race);
            $entityManager->flush();
            $this->addFlash('success', 'Race ajoutée avec succès');


            return $this->redirectToRoute('app_race_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/race/new.html.twig', [
            'race' => $race,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_race_show', methods: ['GET'])]
    public function show(Race $race): Response
    {
        return $this->render('admin/race/show.html.twig', [
            'race' => $race,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_race_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Race $race, EntityManagerInterface $entityManager , SluggerInterface $slugger): Response
    {
        $form = $this->createForm(RaceType::class, $race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On génère le slug
            $slug = $slugger->slug($race->getName());
            $race->setSlug($slug);

            $entityManager->flush();
            
            $this->addFlash('success', 'Race modifiée avec succès');


            return $this->redirectToRoute('app_race_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/race/edit.html.twig', [
            'race' => $race,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_race_delete', methods: ['POST'])]
    public function delete(Request $request, Race $race, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$race->getId(), $request->request->get('_token'))) {
            $entityManager->remove($race);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_race_index', [], Response::HTTP_SEE_OTHER);
    }
}
