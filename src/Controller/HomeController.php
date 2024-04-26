<?php

namespace App\Controller;

use App\Kernel;
use App\Services\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(
        Request $request,
        MessageGenerator $messageGenerator,
        Kernel $kernel
    ): Response
    {
//        dump($kernel->getLogDir());
//        dump($kernel->getCacheDir());
//        dump($kernel->getProjectDir());
//        dd($kernel->getEnvironment());
//        throw new \Exception('Something went wrong!');
         return $this->render('home/index.html.twig', [
             'message' => $messageGenerator->getHappyMessage(),
         ]);
    }
}
