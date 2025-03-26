<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    public function list(int $page): Response
    {
        return new Response('Hello, world! </br> current page => '.$page, Response::HTTP_OK);  
    }

    public function show($slug) : Response {
        return new Response("blog show slug is ".$slug);
    }
    
    #[Route('api/books', name: 'blog_check')]
    public function check() : Response {
        return new JsonResponse(["Blog", "Checked"]);
    }

    // function __invoke() {
    //     return new JsonResponse("Yes It works");
    // }
}