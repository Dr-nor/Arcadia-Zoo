<?php

namespace App\Controller\Admin;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Repository\UsedCarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        return $this->render('admin/dashboard/admin-dashboard.html.twig', [
            'controller_name' => 'DashboardController',
            'users' => $userRepository->findAll(),
        ]);
    }
}
