<?php

namespace App\Http\Controllers;


class PersonController extends Controller
{
    public function __invoke()
    {

        $persons = [
            [
                'id' => 1,
                'name' => 'person1',
                'age' => 99
            ],
            [
                'id' => 2,
                'name' => 'amrabat',
                'age' => 33
            ],
            [
                'id' => 3,
                'name' => 'garry',
                'age' => 33
            ]
        ];

        return $persons;
    }
}
