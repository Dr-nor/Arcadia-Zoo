<?php

namespace App\Controller\Admin;

use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Repository\HabitatRepository;
use App\Entity\Image;
use App\Service\ImageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/admin/habitat')]
class HabitatController extends AbstractController
{
    #[Route('/', name: 'app_habitat_index', methods: ['GET'])]
    public function index(HabitatRepository $habitatRepository): Response
    {
        return $this->render('admin/habitat/index.html.twig', [
            'habitats' => $habitatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_habitat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ImageService $imageHabitat, SluggerInterface $slugger, ): Response
    {
        // On crée le formulaire
        $habitat = new Habitat();
        $form = $this->createForm(HabitatType::class, $habitat);
        //On traite la requête du formulaire
        $form->handleRequest($request);

        // On vérifie si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {

            // On récupère les images
            $images= $form->get('images')->getData();
            
            
            foreach($images as $image){
                // on définit le dossier de destination
                $folder = 'habitats';
                //on appelle le service d'ajout
                $file= $imageHabitat->add($image, $folder, 300, 300);

                $img = new Image();
                $img->setName($file);
                $habitat->addImage($img);

            }
            // On génère le slug
            $slug = $slugger->slug($habitat->getTitle());
            $habitat->setSlug($slug);

            // On stock
            $entityManager->persist($habitat);
            $entityManager->flush();

            $this->addFlash('success', 'Habitat ajouté avec succès');

            return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/habitat/new.html.twig', [
            'habitat' => $habitat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habitat_show', methods: ['GET'])]
    public function show(Habitat $habitat): Response
    {
        return $this->render('admin/habitat/show.html.twig', [
            'habitat' => $habitat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_habitat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habitat $habitat, EntityManagerInterface $entityManager ,ImageService $imageHabitat, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // On récupère les images
            $images= $form->get('images')->getData();
            
            
            foreach($images as $image){
                // on définit le dossier de destination
                $folder = 'habitats';
                //on appelle le service d'ajout
                $file= $imageHabitat->add($image, $folder, 300, 300);

                $img = new Image();
                $img->setName($file);
                $habitat->addImage($img);

            }
            // On génère le slug
            $slug = $slugger->slug($habitat->getTitle());
            $habitat->setSlug($slug);

            // On stock
            $entityManager->persist($habitat);
            $entityManager->flush();

            $this->addFlash('success', 'Habitat modifié avec succès');


            return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
            $entityManager->flush();

            return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/habitat/edit.html.twig', [
            'habitat' => $habitat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_habitat_delete', methods: ['POST'])]
    public function delete(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habitat_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/delete/image/{id}', name: 'app_habitat_delete_image', methods: ['DELETE'])]
    public function deleteImage(Image $image, Request $request, EntityManagerInterface $em, ImageService $imageHabitat): JsonResponse
    {
        
        // On récupère le contenu de la requête
        $data = json_decode($request->getContent(), true);

        if($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])){
            // Le token csrf est valide
            // On récupère le nom de l'image
            $nom = $image->getName();

            if($imageHabitat->delete($nom, 'habitats', 300, 300)){
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
