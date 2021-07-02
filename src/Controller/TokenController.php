<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TokenController extends AbstractController
{

    /**
     * @Route("/token", name="token")
     */
    public function index(): Response
    {

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TokenController.php',
        ]);
    }
}
