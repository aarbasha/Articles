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

Route::get('/ahmad', [HomeController::class, 'home'])->name('ahmad');

//اولا مجلد الاقسام
Route::group(['prefix'=>'Sections','middleware'=>'auth'],function () {
    //عرض صفحة الاقسام
    Route::get('/', [SectionsController::class,'index'])->name('Sections.index');
    // عرض صفحة اضافة الاقسام
    Route::get('create' , [SectionsController::class,'create'])->name('Sections.create');
    //اضافة الاقسام
    Route::post('store' , [SectionsController::class,'store'])->name('Sections.store');
    // عرض صفحة تعديل القسم
    Route::get('edit/{id}' , [SectionsController::class,'edit'])->name('Sections.edit');
    // تعديل بيانات القسام
    Route::post('update/{id}' , [SectionsController::class,'update'])->name('Sections.update');
    // حذف قسم من الاقسام
    Route::get('delete/{id}' , [SectionsController::class,'destroy'])->name('Sections.delete');
});

Route::group(['prefix'=>'Articles','middleware'=>'auth'],function () {

     //عرض صفحة الاقسام
     Route::get('/', [ArticlesController::class,'index'])->name('Articles.index');
     // عرض صفحة اضافة الاقسام
     Route::get('create' , [ArticlesController::class,'create'])->name('Articles.create');
     //اضافة الاقسام
     Route::post('store' , [ArticlesController::class,'store'])->name('Articles.store');
     // عرض صفحة تعديل القسم
     Route::get('edit/{id}' , [ArticlesController::class,'edit'])->name('Articles.edit');
     // تعديل بيانات القسام
     Route::post('update/{id}' , [ArticlesController::class,'update'])->name('Articles.update');
     // حذف قسم من الاقسام
     Route::get('delete/{id}' , [ArticlesController::class,'destroy'])->name('Articles.delete');
     //عرض المقال الواحد
     Route::get('show/{id}' , [ArticlesController::class,'show'])->name('Articles.show');

});
