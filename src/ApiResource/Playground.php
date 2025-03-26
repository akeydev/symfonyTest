<?php

namespace App\Playground;

use Symfony\Component\HttpFoundation\Request;

function request(): Request
{
    return Request::create('/todos.jsonld', 'GET');
}