<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooterController extends AbstractController
{
    /* http://127.0.0.1:8000/footer   */
    /**
     * @Route("/footer", name="footer")
     */
    public function index(): Response
    {
        return $this->render('footer/index.html.twig', [
            'controller_name' => 'FooterController',
        ]);
    }
}
