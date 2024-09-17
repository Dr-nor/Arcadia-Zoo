<?php

namespace App\Controller;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/services', name: 'services_')]
class ServicesController extends AbstractController
{

     #[Route('/', name: 'index')]
     public function index( Request $request, ServiceRepository $serviceRepository): Response
     {
        // Listes des services avec pagination

        // Chercher le numéro de page dans l'url
        $page = $request->query->getInt('page', 1);
        $services = $serviceRepository->findServicesPaginated($page,3);
         return $this->render('front/services/index.html.twig', compact('services'));
     }

     #[Route('/{slug}', name: 'details')]
     public function details(Service $service): Response
     {
         return $this->render('front/services/details.html.twig', compact('service'));
     }
     


}