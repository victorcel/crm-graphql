<?php

namespace App\GraphQL\Queries;

class Hello
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): string
    {
        return "world!, {$args['name']}";
    }
}
