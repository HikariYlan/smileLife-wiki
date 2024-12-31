<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApocalypseController extends AbstractController
{
    #[Route('/apocalypse', name: 'app_apocalypse')]
    public function index(): Response
    {
        return $this->render('apocalypse/index.html.twig', [
            'controller_name' => 'ApocalypseController',
        ]);
    }
}
