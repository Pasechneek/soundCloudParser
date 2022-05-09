<?php

namespace App\Controller;

use App\Entity\Parser2;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Parser2Controller extends AbstractController
{
    #[Route('/parser2', name: 'parser2')]
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $item = new SoundCloudParser();
        $item->setArtistName('Lakey');

        $entityManager->persist($item);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Parser2Controller.php',
        ]);
    }
}
