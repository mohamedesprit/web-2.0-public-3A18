<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service/{name}', name: 'app_service')]
    public function Service($name): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'name' => $name,
        ]);
    }

    #[Route('/home/{name}/{surname}', name: 'Home')] // !! les attributs required
    public function Home($name,$surname): Response
    {
        return new response("Hello world " .$name.$surname);
    }
}
