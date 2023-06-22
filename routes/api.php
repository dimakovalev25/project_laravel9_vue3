<?php

use App\Http\Controllers\Person\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

//здесь прописываем пути для асинхронных запросов
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::prefix('people')->controller(StoreController::class)->group(function (){
//   Route::post('/', 'store')->name('people.store');
//});


Route::group(['namespace'=> 'App\Http\Controllers\Person', 'prefix' => 'people'], function(){
    Route::post('/', StoreController::class);
});

