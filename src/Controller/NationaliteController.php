<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NationaliteController extends AbstractController
{
    /**
     * @Route("/nationalite", name="app_nationalite")
     */
    public function index(): Response
    {
        return $this->render('nationalite/index.html.twig', [
            'controller_name' => 'NationaliteController',
        ]);
    }
}
