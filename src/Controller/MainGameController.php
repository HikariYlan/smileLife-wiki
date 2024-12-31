<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainGameController extends AbstractController
{
    #[Route('/cartes/jeu_de_base', name: 'app_main_game')]
    public function index(): Response
    {
        return $this->render('main_game/index.html.twig', [
            'controller_name' => 'MainGameController',
        ]);
    }
}
