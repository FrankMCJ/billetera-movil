<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BilleteraController extends AbstractController
{
    /**
     * @Route("/", name="user_list")
     * 
     * @return void
     */
    public function list()
    {
        $response = new Response();
        $response->setContent('<div><h1>Hola Mundo</h1></div>');
        return $response;
    }
}