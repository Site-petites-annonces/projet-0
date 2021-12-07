<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PopupContactController extends AbstractController
{
    // http://127.0.0.1:8000/popup/contact
    /**
     * @Route("/popup/contact", name="popup_contact")
     */
    public function index(): Response
    {
        return $this->render('popup_contact/index.html.twig', [
            'controller_name' => 'PopupContactController',
        ]);
    }
}
