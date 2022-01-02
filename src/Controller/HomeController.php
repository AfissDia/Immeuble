<?php

namespace App\Controller;

use App\Repository\AcheterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{


    /**
     * @Route("/", name="home")
     * @param AcheterRepository $repository
     * @return Response 
     */
    public function index(AcheterRepository $repository): Response
    {
    $achats=$repository->findLatest();

    return $this->render('pages/home.html.twig',[
        'achats'=>$achats
    ]);
    }
}