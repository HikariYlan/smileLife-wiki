<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GirlPowerController extends AbstractController
{
    #[Route('/girl/power', name: 'app_girl_power')]
    public function index(): Response
    {
        return $this->render('girl_power/index.html.twig', [
            'controller_name' => 'GirlPowerController',
        ]);
    }
}
