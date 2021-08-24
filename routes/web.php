<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\ArticlesController;


// عرض صفحة الموقع الرئيسية
Route::get('/', function () {
    return view('frontend.views.index');
})->name('home');

Route::get('/software', function () {
    return view('frontend.views.Articles');
})->name('Articles_software');


// المصادقة
Auth::routes();


Route::group(['prefix' =>'Articles', 'middleware' =>'auth'], function(){
	Route::get('software', [ArticlesController::class,'index'])->name('software');
    Route::get('software/add' , [ArticlesController::class,'create'])->name('add');
});


Route::get('/ahmad', [HomeController::class, 'home'])->name('ahmad');



