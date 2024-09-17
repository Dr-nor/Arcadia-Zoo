<?php

namespace App\Controller;

use App\Entity\Testimonial;
use App\Form\TestimonialType;
use App\Repository\ServiceRepository;
use App\Repository\HabitatRepository;
use App\Repository\AnimalRepository;
use App\Repository\TestimonialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    // Home
    #[Route('/', name: 'home', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager,ServiceRepository $serviceRepository, HabitatRepository $habitatRepository,AnimalRepository $animalRepository,TestimonialRepository $testimonialRepository,): Response
    {
         // Add Testimonial
         $testimonial = new Testimonial();
         $form = $this->createForm(TestimonialType::class, $testimonial);
         $form->handleRequest($request);
 
         if ($form->isSubmitted() && $form->isValid()) {
             
             $entityManager->persist($testimonial);
             $entityManager->flush();
             $this->addFlash('success', 'Témoignage envoyé avec succès');
 
 
             return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
         }

        return $this->render('front/home.html.twig', [
            'controller_name' => 'FrontController',
            'services' => $serviceRepository->findAll(),
            'habitats' => $habitatRepository->findAll(),
            'animals' => $animalRepository->findAll(),
            'testimonials' => $testimonialRepository->findBy(['active'=> true]),
            'form' => $form,
            ]);
    }
  
}
