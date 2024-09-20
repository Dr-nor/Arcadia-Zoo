<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfileController extends AbstractController
{
    #[Route('profile/editpassword', name: 'app_editpass')]
    public function editpass(Request $request, UserPasswordHasherInterface $passwordHasher,EntityManagerInterface $entityManager): Response
    {
        if($request->isMethod('POST')){
            
            $user= $this->getUser();
            // On vérifie si les 2 mots de passe sont identiques
            if($request->request->get('pass')==$request->request->get('pass2')){
                $hashedPassword = $passwordHasher->hashPassword($user,$request->request->get('pass'));
                $user->setPassword($hashedPassword);
                $entityManager->flush();
                $this->addFlash('success', 'Mot de passe mis à jour avec succès');
                
                if(in_array('ROLE_ADMIN',$this->getUser()->getRoles(),true)){
                    return $this->redirectToRoute('app_admin_dashboard');
                 }
                return $this->redirectToRoute('app_employe_dashboard');

            }else{
                $this->addFlash('danger', 'Les deux mots de passe ne sont pas identiques');
            }
        }

        return $this->render('admin/profile/editpassword.html.twig', [
        ]);
    }

    
}
