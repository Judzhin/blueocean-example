<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CRCIndController extends AbstractController
{
    #[Route('/crcind', name: 'crcind')]
    public function index(): Response
    {
        $soapClient = new \SoapClient('https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL');
        $result = $soapClient->GetByName('a');

        dd($result);

        return $this->render('crcind/index.html.twig', [
            'controller_name' => 'CRCIndController',
        ]);
    }
}
