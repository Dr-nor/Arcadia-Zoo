<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Animal;
use App\Form\ContactType;
use App\Form\AnimalType;
use App\Repository\RaceRepository;
use App\Repository\HabitatRepository;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Psr\Log\LoggerInterface;



#[Route('/animals', name: 'animal_')]
class AnimalsController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

     #[Route('/', name: 'index')]
     public function index( Request $request, AnimalRepository $animalRepository, RaceRepository $raceRepository,HabitatRepository $habitatRepository): Response
     {
        // limit
        $limit = 9;
        // Chercher toutes les races
        $races = $raceRepository->findAll();

        // Chercher toutes les habitas
        $habitats = $habitatRepository->findAll();



        //Récupérer  les filtres
        $categFilter = $request->get("races");
        $habitatFilter = $request->get("habitats");
        $Find = $request->get("find");
        
        $filters = array(
            'races'=>$categFilter,
            'habitats'=>$habitatFilter,
            'find'=>$Find,
        );

        
        // Chercher tous les animaux avec pagination
        // Cherche le numéro de page dans l'url
        $page = $request->query->getInt('page', 1);
        $animals = $animalRepository->findAnimalsPaginated($page,$limit, $filters);

        // total des animaux
        $total = $animalRepository->getTotalAnimals($filters);
         // On vérifie si on a une requête Ajax
         if($request->get('ajax')){
            return new JsonResponse([
                'content' => $this->renderView('front/animals/_content.html.twig', compact('animals', 'total', 'page', 'limit'))
            ]);
        }
        
        return $this->render('front/animals/index.html.twig', compact('animals','total', 'races', 'habitats' ,'page', 'limit'));
     }

     #[Route('/{slug}', name: 'details', methods: ['GET', 'POST'])]
     public function details(Request $request,Animal $animal , AnimalRepository $animalRepository,EntityManagerInterface $entityManager): Response
     {
        
        $similarAnimals = $animalRepository->findBy(['race_id'=> $animal->getRaceId()]);
        return $this->render('front/animals/details.html.twig', compact('animal','similarAnimals'));
     }



}