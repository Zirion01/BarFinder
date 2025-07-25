<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BarController extends AbstractController
{
    #[Route('/bar', name: 'app_bar')]
    public function index(): Response
    {
        return $this->render('bar/index.html.twig', [
            'controller_name' => 'BarController',
        ]);
    }
}
