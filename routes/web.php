<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\SectionsController;
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

//اولا مجلد الاقسام
Route::group(['prefix' =>'Sections', 'middleware' =>'auth'], function(){
    //عرض صفحة الاقسام
	Route::get('show', [SectionsController::class,'index'])->name('show_Sections');
    // عرض صفحة اضافة الاقسام
    Route::get('add' , [SectionsController::class,'create'])->name('add_Sections');
    //اضافة الاقسام
    Route::post('store' , [SectionsController::class,'store'])->name('store_Sections');
    // عرض صفحة تعديل القسم
    Route::get('{id}/edit' , [SectionsController::class,'edit'])->name('edit_Sections');
    // تعديل بيانات القسام
    Route::post('update/{id}' , [SectionsController::class,'update'])->name('update_Sections');
    // حذف قسم من الاقسام
    Route::get('delete/{id}' , [SectionsController::class,'destroy'])->name('delete_Sections');
});


Route::get('/ahmad', [HomeController::class, 'home'])->name('ahmad');
