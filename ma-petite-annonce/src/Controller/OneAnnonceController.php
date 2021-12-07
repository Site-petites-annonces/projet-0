<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OneAnnonceController extends AbstractController
{
    // http://127.0.0.1:8000/oneannonce
    /**
     * @Route("/one/annonce", name="one_annonce")
     */
    public function index(): Response
    {
        return $this->render('one_annonce/index.html.twig', [
            'controller_name' => 'OneAnnonceController',
        ]);
    }
}
