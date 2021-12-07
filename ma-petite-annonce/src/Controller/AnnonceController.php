<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /* http://127.0.0.1:8000/annonce */
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index(): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
        ]);
    }

    /**
     * @Route("/", name="home" )
     */
    public function home()
    {
        return $this->render('annonce/home.html.twig', [
            'title' => 'Ma Petite Annonce'
        ]);
    }
}
