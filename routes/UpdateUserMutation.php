<?php

namespace App\graphql\Mutations;

use App\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class UpdateStudentMutation extends Mutation
{
    protected $attributes = [
        "name" => "updateUser",
    ];

    public function type(): Type
    {
        return GraphQL::type("User");
    }

    public function args(): array
    {
        return [
        'name' => [
            'name' => 'name',
            'type' => Type::nonNull(Type::string())
        ],
        'email' => [
            'name' => 'email',
            'type' => Type::nonNull(Type::string())
        ]
    ];

    }

    public function resolve($root, $args)
    {
        $user = User::findOrFail($args["id"]);
        $user->fill($args);
        $user->save();
        return $user;
    }
}