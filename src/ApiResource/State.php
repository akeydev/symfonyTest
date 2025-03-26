<?php

namespace App\ApiResource\State;

use ApiPlatform\Metadata\CollectionOperationInterface;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\ApiResource\Todo;

final class TodoProvider implements ProviderInterface
{
    public function provide(Operation $operation, array $uriVariables = [], array $context = []): iterable|object|null
    {
        if ($operation instanceof CollectionOperationInterface) {
            $Todo = new Todo();
            $Todo->id = '1';
            /* $Todo2 = new Todo();
             * $Todo2->id = '2'; */

            return [$Todo/* $Todo2 */];
        }
        $todo = new Todo();

        $todo->id = $uriVariables['id'];
        return $todo;
    }
}