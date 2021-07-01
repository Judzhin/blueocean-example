<?php

namespace App\Controller;

use App\Service\CRCIndClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CRCIndController
 *
 * @package App\Controller
 */
class CRCIndController extends AbstractController
{
    /**
     * @param CRCIndClient $client
     * @return Response
     */
    #[Route('/crcind', name: 'crcind')]
    public function index(CRCIndClient $client): Response
    {
        // $soapClient = new \SoapClient('https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL');
        $query = strtolower('a');
        $total = 0;
        $result = $client->GetListByName($query);
        dd($result->GetListByNameResult->PersonIdentification);
        foreach ($result->GetListByNameResult->PersonIdentification as $personIdentification)
        {
            if (strtolower($personIdentification->Name[0]) === $query) {
                ++$total;
            }
        }

        return $this->render('crcind/index.html.twig', [
            'controller_name' => 'CRCIndController',
        ]);
    }
}
