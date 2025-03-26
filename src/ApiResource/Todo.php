<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\ApiResource\State\TodoProvider;

// #[ApiResource(operations: [
//     new Get(uriTemplate: '/Todo/{id}'),
//     new GetCollection(uriTemplate: '/Todo'),
// ])]
#[ApiResource(provider: TodoProvider::class)]
class Todo
{
    public string $id;
}