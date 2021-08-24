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
//########################################################################################
//اولا مجلد الاقسام
//عرض صفحة الاقسام
Route::get('index', [SectionsController::class,'index'])->name('Sections.index');
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
//########################################################################################
