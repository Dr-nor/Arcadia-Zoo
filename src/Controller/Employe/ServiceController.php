<?php

namespace App\Controller\Employe;

use App\Entity\Image;
use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use App\Service\ImageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/employe/service')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'employe_service_index', methods: ['GET'])]
    public function index(ServiceRepository $serviceRepository): Response
    {
        return $this->render('employe/service/index.html.twig', [
            'services' => $serviceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'employe_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ImageService $imageService, SluggerInterface $slugger, ): Response
    {
        // On crée le formulaire
        $service = new Service();

        // On crée le formulaire
        $form = $this->createForm(ServiceType::class, $service);
        //On traite la requête du formulaire
        $form->handleRequest($request);

        // On vérifie si le formulaire est soumis et valise
        if ($form->isSubmitted() && $form->isValid()) {

            // On récupère les images
            $images= $form->get('images')->getData();
            
            
            foreach($images as $image){
                // on définit le dossier de destination
                $folder = 'services';
                //on appelle le service d'ajout
                $file= $imageService->add($image, $folder, 300, 300);

                $img = new Image();
                $img->setName($file);
                $service->addImage($img);

            }
            // On génère le slug
            $slug = $slugger->slug($service->getTitle());
            $service->setSlug($slug);

            // On stock
            $entityManager->persist($service);
            $entityManager->flush();

            $this->addFlash('success', 'Service ajouté avec succès');

            return $this->redirectToRoute('employe_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/service/new.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'employe_service_show', methods: ['GET'])]
    public function show(Service $service): Response
    {
        return $this->render('employe/service/show.html.twig', [
            'service' => $service,
        ]);
    }

    #[Route('/{id}/edit', name: 'employe_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Service $service, EntityManagerInterface $entityManager ,ImageService $imageService, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // On récupère les images
            $images= $form->get('images')->getData();
            
            
            foreach($images as $image){
                // on définit le dossier de destination
                $folder = 'services';
                //on appelle le service d'ajout
                $file= $imageService->add($image, $folder, 300, 300);

                $img = new Image();
                $img->setName($file);
                $service->addImage($img);

            }
            // On génère le slug
            $slug = $slugger->slug($service->getTitle());
            $service->setSlug($slug);

            // On stock
            $entityManager->persist($service);
            $entityManager->flush();

            $this->addFlash('success', 'Service modifié avec succès');


            return $this->redirectToRoute('employe_service_index', [], Response::HTTP_SEE_OTHER);
            $entityManager->flush();

            return $this->redirectToRoute('employe_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('employe/service/edit.html.twig', [
            'service' => $service,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'employe_service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
        }

        return $this->redirectToRoute('employe_service_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/delete/image/{id}', name: 'employe_service_delete_image', methods: ['DELETE'])]
    public function deleteImage(Image $image, Request $request, EntityManagerInterface $em, ImageService $imageService): JsonResponse
    {
        
        // On récupère le contenu de la requête
        $data = json_decode($request->getContent(), true);

        if($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])){
            // Le token csrf est valide
            // On récupère le nom de l'image
            $nom = $image->getName();

            if($imageService->delete($nom, 'services', 300, 300)){
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
