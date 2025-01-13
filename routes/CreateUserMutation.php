<?php

use App\User;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class CreateStudentMutation extends Mutation
{

protected $attributes = [
'name' => 'createUser'
];

public function type(): Type
{
    return GraphQL::type('User');
}

public function args(): array
{
    return [
        "id" => [
            'name' => 'id',
            'type' => Type::nonNull(Type::int()),
        ],
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
    $user = new User();
    $user->name = $args['name'];
    $user->email = $args['email'];
    $user->save();

    return $user;
}

}