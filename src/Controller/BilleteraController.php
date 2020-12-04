<?php

namespace App\Controller;

use SoapClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BilleteraController extends AbstractController
{
    private $soap;

    public function __construct()
    {
        $opts = array(
            'trace' => 1,
            'uri' => '/billetera-movil/public/index.php/soap',
            'location' => 'http://localhost/billetera-movil/public/index.php/soap'
        );
        $this->soap = new SoapClient(NULL, $opts);
    }

    /**
     * @Route("/", name="Billetera_list")
     * 
     * @return void
     */
    public function list(Request $request)
    {
        $response = new Response();
        return $response->setContent($this->generateUrl('Soap_index'));
        // return $this->redirectToRoute('Billetera_soapclient');
    }

    /**
     * @Route("/soapclient", name="Billetera_soapclient")
     */
    public function soapClient()
    {
        $data = ['name' => 'Frank'];
        return (new Response())->setContent($this->soap->__soapCall('hello', array($data)));
    }
}