<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Repository\HabitatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/habitats', name: 'habitats_')]
class HabitatsController extends AbstractController
{

     #[Route('/', name: 'index')]
     public function index( Request $request, HabitatRepository $habitatRepository): Response
     {
        // Listes des habitats avec pagination

        // Chercher le numéro de page dans l'url
        $page = $request->query->getInt('page', 1);
        $habitats = $habitatRepository->findHabitatsPaginated($page,3);
         return $this->render('front/habitats/index.html.twig', compact('habitats'));
     }

     #[Route('/{slug}', name: 'details')]
     public function details(Habitat $habitat): Response
     {
         return $this->render('front/habitats/details.html.twig', compact('habitat'));
     }
     


}