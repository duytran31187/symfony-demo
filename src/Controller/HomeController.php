<?php

namespace App\Controller;

use App\Kernel;
use App\Services\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/home')]
class HomeController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }
    #[Route('/', name: 'app_home')]
    public function index(
        Request $request,
        MessageGenerator $messageGenerator
    ): Response
    {
//        throw new \Exception('Something went wrong!');
        $this->logger->info('home/index route is called'); // second way: inject via constructor
         return $this->render('home/index.html.twig', [
             'message' => $messageGenerator->getHappyMessage(),
             'app_home_test_kernel_url' =>
                 $this->container->get('router')->generate('app_home_test_kernel') // first way: by function from AbstractController
         ]);
    }
    #[Route('/test-kernel', name: 'app_home_test_kernel')]
    public function testKernel(
        Kernel $kernel // third way: inject via function
    ) {
        dump($kernel->getLogDir());
        dump($kernel->getCacheDir());
        dump($kernel->getProjectDir());
        dd($kernel->getEnvironment());
    }
}
