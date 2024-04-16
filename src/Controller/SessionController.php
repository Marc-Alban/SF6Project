<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {
        //session_start();
        $session = $request->getSession();
        //initialise la valeur
        $nbrVisite = 1;

        //vérifie s'i lexiste une valeur en session
        if($session->has('nbVisite'))
        {
            //Récupération de la session
            $nbrVisite = $session->get('nbVisite');
            //Augmentation de 1 à chaque rafraichissement
            $nbrVisite++;
        }
        $session->set('nbVisite', $nbrVisite );



        return $this->render('session/index.html.twig', [
            'nbVisite' => $nbrVisite,
        ]);
    }
}
