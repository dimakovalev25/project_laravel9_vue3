<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    public function __invoke()
    {

        $persons = [
            [
                'id' => 1,
                'name' => 'jo',
                'age' => 33
            ],
            [
                'id' => 2,
                'name' => 'john',
                'age' => 33
            ],
            [
                'id' => 3,
                'name' => 'alex',
                'age' => 33
            ]
        ];
        return $persons;
    }
}
