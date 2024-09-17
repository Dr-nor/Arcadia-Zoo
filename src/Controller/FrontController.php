<?php

namespace App\Controller;

use App\Entity\Testimonial;
use App\Entity\Contact;
use App\Form\TestimonialType;
use App\Form\ContactType;
use App\Repository\ServiceRepository;
use App\Repository\HabitatRepository;
use App\Repository\AnimalRepository;
use App\Repository\TestimonialRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

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

    // Contact
    #[Route('/contact', name: 'contact',methods: ['GET', 'POST'])]
    public function contact(Request $request,EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
      $contact= new Contact();
      $form = $this->createForm(ContactType::class, $contact);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $entityManager->persist($contact);
          $entityManager->flush();

          //Email
          $email = (new TemplatedEmail())
          ->from($contact->getEmail())
          ->to('admin@arcadia.com')
          
          ->subject("[Arcadia Zoo] Message depuis le formulaire de contact")
          ->htmlTemplate('emails/contact.html.twig')
          ->context([
              'contact' => $contact,
          ]);

          $mailer->send($email);

          $this->addFlash('success', 'Message Envoyé avec succès');

          return $this->redirectToRoute('contact', [], Response::HTTP_SEE_OTHER);

      }
        return $this->render('front/contact.html.twig', [
            'form' => $form,
        ]);
    }
  
}
