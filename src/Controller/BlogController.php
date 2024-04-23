<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; // must be imported to use attributes

class BlogController extends AbstractController
{
    public function list(): Response
    {
        return $this->render('blog/list.html.twig', [
            'slugs' => [
                'my-first-post',
                'second-post',
                'third-post',
            ]
        ]);
    }

    public function show($slug): Response
    {
        return $this->render('blog/blog.html.twig', [
            'slug' => $slug,
        ]);
    }
}