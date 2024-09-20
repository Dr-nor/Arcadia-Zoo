<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
          // Logged user Redirection 
        if ($this->getUser()) {
            if(in_array('ROLE_ADMIN',$this->getUser()->getRoles(),true)){
                return $this->redirectToRoute('app_admin_dashboard');
             }
             elseif(in_array('ROLE_EMPLOYE',$this->getUser()->getRoles(),true)){
                return $this->redirectToRoute('app_employe_dashboard');
             }
             elseif(in_array('ROLE_VET',$this->getUser()->getRoles(),true)){
                return $this->redirectToRoute('app_veterinary_dashboard');
             }
             else{
                return $this->redirectToRoute('app_user_dashboard');

             }   
        }


        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
