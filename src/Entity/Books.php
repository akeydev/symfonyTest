<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use Symfony\Component\HttpFoundation\JsonResponse;

#[ApiResource(operations: [
    // new Get(controller: BlogController::class)
    new Get(routeName: 'blog_check'),
])]
class Books
{

    #[ApiResource]
    public function checkTwo() : JsonResponse {
        return new JsonResponse("check","two");
    }
}