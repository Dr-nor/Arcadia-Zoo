<?php

namespace App\Controller\Admin;

use App\Repository\HabitatreportRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServiceRepository;
use App\Repository\TestimonialRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Repository\VetreportRepository;
use Doctrine\ORM\EntityManagerInterface;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(UserRepository $userRepository, EntityManagerInterface $entityManager, ServiceRepository $serviceRepository , HabitatRepository $habitatRepository ): Response
    {
        return $this->render('admin/dashboard/admin-dashboard.html.twig', [
            'controller_name' => 'DashboardController',
            'users' => $userRepository->findAll(),
            'services' =>  $serviceRepository->findAll(),
            'habitat' =>  $habitatRepository->findAll(),
        ]);
    }

    #[Route('/employe/dashboard', name: 'app_employe_dashboard')]
    public function employe(ServiceRepository $serviceRepository,TestimonialRepository $testimonialRepository): Response
    {
        return $this->render('admin/dashboard/employe-dashboard.html.twig', [
            'controller_name' => 'EmployeDashboardController',
            'services' =>  $serviceRepository->findAll(),
            'testimonials' => $testimonialRepository->findAll(),
        ]);
    }

    #[Route('/user/dashboard', name: 'app_user_dashboard')]
    public function user(): Response
    {
        return $this->render('admin/dashboard/user-dashboard.html.twig', [
            'controller_name' => 'UserDashboardController',
        
        ]);
    }

    #[Route('/veterinary/dashboard', name: 'app_veterinary_dashboard')]
    public function veterinary(VetreportRepository $vetreportRepository, HabitatreportRepository $habitatreportRepository): Response
    {
        return $this->render('admin/dashboard/veterinary-dashboard.html.twig', [
            'controller_name' => 'VeterinaryDashboardController',
            'animalrepports' =>  $vetreportRepository->findBy(['user'=> $this->getUser()]),
            'habitatrepports' => $habitatreportRepository->findBy(['user'=> $this->getUser()]),
        ]);
    }
}
