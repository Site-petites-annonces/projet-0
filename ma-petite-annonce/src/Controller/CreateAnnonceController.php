<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateAnnonceController extends AbstractController
{
    /* http://127.0.0.1:8000/create/annonce   */
    /**
     * @Route("/create/annonce", name="create_annonce")
     */
    public function index(): Response
    {
        return $this->render('create_annonce/index.html.twig', [
            'controller_name' => 'CreateAnnonceController',
        ]);
    }
}
