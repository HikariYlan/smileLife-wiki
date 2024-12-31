<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RulesController extends AbstractController
{
    #[Route('/regles', name: 'app_rules')]
    public function index(): Response
    {
        return $this->render('rules/index.html.twig', [
            'controller_name' => 'RulesController',
        ]);
    }

    #[Route('/regles/trash', name: 'app_rules_trash')]
    public function trash(): Response
    {
        return $this->render('rules/trash.html.twig', [
            'controller_name' => 'RulesController',
        ]);
    }

    #[Route('/regles/apocalypse', name: 'app_rules_apocalypse')]
    public function apocalypse(): Response
    {
        return $this->render('rules/apocalypse.html.twig', [
            'controller_name' => 'RulesController',
        ]);
    }

    #[Route('/regles/fantaisie', name: 'app_rules_fantasy')]
    public function fantaisie(): Response
    {
        return $this->render('rules/fantasy.html.twig', [
            'controller_name' => 'RulesController',
        ]);
    }

    #[Route('/regles/girl_power', name: 'app_rules_girl_power')]
    public function girlPower(): Response
    {
        return $this->render('rules/girl_power.html.twig', [
            'controller_name' => 'RulesController',
        ]);
    }
}
