<?php

namespace App\Http\Controllers\Person;


use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;


class StoreController extends Controller
{

//    public function store(StoreRequest $request){
//        $data = $request->validated();
//        var_dump($data);
//        $person = Person::create($data);
//        return $person;
//    }
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        var_dump($data);
        $person = Person::create($data);
        return $person;

    }
}
