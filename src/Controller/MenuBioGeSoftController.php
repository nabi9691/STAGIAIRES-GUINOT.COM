<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuBioGeSoftController extends AbstractController
{
    /**
     * @Route("/menu/bio/ge/soft", name="app_menu_bio_ge_soft")
     */
    public function index(): Response
    {
        return $this->render('menu_bio_ge_soft/index.html.twig', [
            'controller_name' => 'MenuBioGeSoftController',
        ]);
    }
}
