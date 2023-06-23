<?php

use App\Http\Controllers\Person\DeleteController;
use App\Http\Controllers\Person\IndexController;
use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\Person\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

//здесь прописываем пути для асинхронных запросов
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace'=> 'App\Http\Controllers\Person', 'prefix' => 'people'], function(){
    Route::post('/', StoreController::class);
    Route::get('/', IndexController::class);
    Route::patch('/{person}', UpdateController::class);
    Route::delete('/{id}', DeleteController::class);
});

