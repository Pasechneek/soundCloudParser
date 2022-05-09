<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SoundCloudParser;

class ParserController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/parser', name: 'parser')]
    public function createSoundCloudParser(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $item = new SoundCloudParser();

        $item->setTrackName('track name');
        $item->setDuration('02:00');
        $item->setListeningsCount(5);
        $item->setCommentsCount(5);
        $item->setArtistName('Lakey');
        $item->setArtistPseudonym('lakey');
        $item->setArtistCity('los angelos');
        $item->setSubscribersCount(5);
        $item->setIsInDatabaseAlready(false);
        dump("it works");


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($item);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$item->getId());
    }
}
