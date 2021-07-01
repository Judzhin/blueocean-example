<?php

namespace App\Controller;

use App\Model\PersonIdentification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class CRCIndController
 *
 * @package App\Controller
 */
class CRCIndController extends AbstractController
{
    /**
     * @param \SoapClient $client
     * @return Response
     * @throws ExceptionInterface
     */
    #[Route('/crcind', name: 'crcind')]
    public function index(\SoapClient $client): Response
    {
        $result = $client->GetListByName(['name' => 'a']);
        /** @var PersonIdentification[]|array $persons */

        // /**
        //  * @param array $result
        //  * @return iterable
        //  * @throws ExceptionInterface
        //  */
        // $deNormalize = function (array $result): iterable {
        //     $normalizer = new PropertyNormalizer;
        //     $serializer = new Serializer([$normalizer]);
        //
        //     foreach ($result as $PersonIdentification) {
        //         yield $serializer->denormalize($PersonIdentification, PersonIdentification::class);
        //     }
        // };

        return $this->render('crcind/index.html.twig', [
            'persons' => iterator_to_array($this->deNormalize($result->GetListByNameResult->PersonIdentification)),
        ]);
    }

    /**
     * @param array $result
     * @return iterable
     * @throws ExceptionInterface
     */
    private function deNormalize(array $result): iterable
    {
        $normalizer = new PropertyNormalizer;
        $serializer = new Serializer([$normalizer]);

        foreach ($result as $PersonIdentification) {
            yield $serializer->denormalize($PersonIdentification, PersonIdentification::class);
        }
    }
}
