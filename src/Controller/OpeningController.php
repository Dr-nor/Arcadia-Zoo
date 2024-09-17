<?php
namespace App\Controller;

use App\Repository\OpeningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class OpeningController extends AbstractController
{
    public function openingTimeShow( OpeningRepository $openingRepository): Response
    {
        return $this->render('front/layouts/opening.html.twig', [
            'openings' => $openingRepository->findAll(),
        ]);
    }
}