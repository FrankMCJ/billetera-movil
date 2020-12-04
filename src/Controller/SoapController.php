<?php

namespace App\Controller;

use App\Service\SoapService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoapController extends AbstractController
{
    /**
     * @Route("/soap", name="Soap_index")
     */
    public function index(SoapService $soapService)
    {
        $soapServer = new \SoapServer(NULL, ['uri' => '/billetera-movil/public/index.php/soap']);
        $soapServer->setObject($soapService);
        $soapServer->handle();
    }
}