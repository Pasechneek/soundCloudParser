<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Parser2;
use Doctrine\ORM\EntityManagerInterface;

class Parser2Controller extends AbstractController
{
    #[Route('/parser2', name: 'parser2')]
    public function createParser2(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)

        $entityManager = $this->getDoctrine()->getManager();
//        createProduct($entityManager);

        $parser2 = new Parser2();
        $parser2->setArtistName('Artist name');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($parser2);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$parser2->getId());
    }

}
