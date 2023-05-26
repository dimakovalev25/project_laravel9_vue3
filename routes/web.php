<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', \App\Http\Controllers\PostController::class);

Route::get('/persons', \App\Http\Controllers\PersonController::class);

//Route::post('/persons/post', \App\Http\Controllers\Person\StoreController::class);



