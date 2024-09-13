<?php

namespace App\Controller\Admin;

use App\Entity\Testimonial;
use App\Form\TestimonialType;
use App\Repository\TestimonialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('admin/testimonial')]
class TestimonialController extends AbstractController
{
    #[Route('/', name: 'app_testimonial_index', methods: ['GET'])]
    public function index(TestimonialRepository $testimonialRepository): Response
    {
        return $this->render('admin/testimonial/index.html.twig', [
            'testimonials' => $testimonialRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_testimonial_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $testimonial = new Testimonial();
        $form = $this->createForm(TestimonialType::class, $testimonial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On attribue l'utilisateur
            $testimonial->setUser($this->getUser());
        
            $entityManager->persist($testimonial);
            $entityManager->flush();
            $this->addFlash('success', 'Témoignage ajouté avec succès');


            return $this->redirectToRoute('app_testimonial_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/testimonial/new.html.twig', [
            'testimonial' => $testimonial,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_testimonial_show', methods: ['GET'])]
    public function show(Testimonial $testimonial): Response
    {
        return $this->render('admin/testimonial/show.html.twig', [
            'testimonial' => $testimonial,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_testimonial_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Testimonial $testimonial, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TestimonialType::class, $testimonial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Témoignage modifié avec succès');

            return $this->redirectToRoute('app_testimonial_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/testimonial/edit.html.twig', [
            'testimonial' => $testimonial,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_testimonial_delete', methods: ['POST'])]
    public function delete(Request $request, Testimonial $testimonial, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$testimonial->getId(), $request->request->get('_token'))) {
            $entityManager->remove($testimonial);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_testimonial_index', [], Response::HTTP_SEE_OTHER);
    }
}
