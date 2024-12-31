<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FantasyController extends AbstractController
{
    #[Route('/cartes/fantaisie', name: 'app_fantasy')]
    public function index(): Response
    {
        return $this->render('fantasy/index.html.twig', [
            'controller_name' => 'FantasyController',
        ]);
    }
}
