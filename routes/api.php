<?php

use App\Http\Controllers\Person\DeleteController as PersonDeleteController;
use App\Http\Controllers\Person\IndexController as PersonIndexController;
use App\Http\Controllers\Person\StoreController as PersonStoreController;
use App\Http\Controllers\Person\UpdateController as PersonUpdateController;
use App\Http\Controllers\Post\StoreController as PostStoreController;
use App\Http\Controllers\Post\IndexController as PostIndexController;
use App\Http\Controllers\Post\ShowController as PostShowController;
use App\Http\Controllers\Post\EditController as PostEditController;
use App\Http\Controllers\Post\DeleteController as PostDeleteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

//здесь прописываем пути для асинхронных запросов
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['namespace'=> 'App\Http\Controllers\Person', 'prefix' => 'people'], function(){
   Route::post('/', PersonStoreController::class);
   Route::get('/', PersonIndexController::class);
   Route::patch('/{person}', PersonUpdateController::class);
   Route::delete('/{id}', PersonDeleteController::class);
});

Route::group(['namespace' => 'App\Http\Controllers\Post', 'prefix' => 'post'], function (){
    Route::post('/', PostStoreController::class);
    Route::get('/', PostIndexController::class);
    Route::get('/{post}', PostShowController::class);
    Route::patch('/{post}', PostEditController::class);
    Route::delete('/{post}', PostDeleteController::class);
});

