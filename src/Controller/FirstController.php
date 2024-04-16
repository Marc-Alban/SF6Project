<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route('/{firstname}/{lastname}', name: 'app')]
    public function index(Request $request ,$firstname,$lastname): Response
    {
        return $this->render('page.html',[
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);
    }
}
