<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' =>'admin', 'namespace' =>'customers'], function(){
// 	Route::get('/post',[customersController::class , '']);
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
