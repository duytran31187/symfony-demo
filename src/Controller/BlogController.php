<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; // must be imported to use attributes

class BlogController extends AbstractController
{
    public function list(): Response
    {
        return $this->render('blog/list.html.twig');
    }

    public function show($slug): Response
    {
        return new Response(
            '<html><body>Slug: '.$slug.'</body></html>'
        );
    }
}