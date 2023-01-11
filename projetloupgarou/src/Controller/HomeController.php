<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    # page d'accueil
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('index.html.twig',['controller_name'=>'HomeController']);
    }

    #[Route('/formulaire', name: 'formulaire')]
    public function formulaire(): Response
    {
        return $this->render('formulaire.html.twig',['controller_name'=>'HomeController']);
    }
}
