<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use App\Entity\Animal;
use App\Form\AnimalType;
use App\Repository\AnimalRepository;
use App\Service\ImageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('admin/animal')]
class AnimalController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    #[Route('/', name: 'app_animal_index', methods: ['GET'])]
    public function index(AnimalRepository $animalepository): Response
    {
        return $this->render('admin/animal/index.html.twig', [
            'animals' => $animalepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ImageService  $imageService, SluggerInterface $slugger): Response
    {
        $Animal = new Animal();
        $form = $this->createForm(AnimalType::class, $Animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // On récupère les images
            $images= $form->get('images')->getData();
            foreach($images as $image){
                // on définit le dossier de destination
                $folder = 'animals';
                //on appelle le service d'ajout
                $file= $imageService->add($image, $folder, 300, 300);

                $img = new Image();
                $img->setName($file);
                $Animal->addImage($img);

            }
            // On génère le slug
            $slug = $slugger->slug($Animal->getName());
            $Animal->setSlug($slug);
            // On stock
            $entityManager->persist($Animal);
            $entityManager->flush();
            $this->addFlash('success', 'Animal ajoutée avec succès');


            return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/animal/new.html.twig', [
            'animal' => $Animal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animal_show', methods: ['GET'])]
    public function show(Animal $Animal): Response
    {
        return $this->render('admin/animal/show.html.twig', [
            'animal' => $Animal,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $Animal, EntityManagerInterface $entityManager, ImageService $imageService, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(AnimalType::class, $Animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // On récupère les images
            $images= $form->get('images')->getData();
            
            foreach($images as $image){
                // on définit le dossier de destination
                $folder = 'animals';
                //on appelle le service d'ajout
                $file= $imageService->add($image, $folder, 300, 300);

                $img = new Image();
                $img->setName($file);
                $Animal->addImage($img);
            }
            // On génère le slug
            $slug = $slugger->slug($Animal->getName());
            $Animal->setSlug($slug);
            

            $entityManager->flush();

            $this->addFlash('success', 'Animal modifiée avec succès');

            return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/animal/edit.html.twig', [
            'animal' => $Animal,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $Animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Animal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_animal_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/delete/image/{id}', name: 'app_animal_delete_image', methods: ['DELETE'])]
    public function deleteImage(Image $image, Request $request, EntityManagerInterface $em, ImageService $imageService): JsonResponse
    {
        // On récupère le contenu de la requête
        $data = json_decode($request->getContent(), true);

        if($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])){
            // Le token csrf est valide
            
            // On récupère le nom de l'image
            $nom = $image->getName();

            if($imageService->delete($nom, 'animals', 300, 300)){

                // On supprime l'image de la base de données
                $em->remove($image);
                $em->flush();

                return new JsonResponse(['success' => true], 200);
            }
            // La suppression a échoué
            return new JsonResponse(['error' => 'Erreur de suppression'], 400);
        }

        return new JsonResponse(['error' => 'Token invalide'], 400);
    }
}
