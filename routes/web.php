<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\SectionsController;
use App\Http\Controllers\backend\ArticlesController;
use App\Http\Controllers\backend\CoursesController;
use App\Http\Controllers\backend\PhotosController;


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
     //عرض صفحة المقالات
     Route::get('/', [ArticlesController::class,'index'])->name('Articles.index');
     // عرض صفحة اضافة المقال
     Route::get('create' , [ArticlesController::class,'create'])->name('Articles.create');
     //اضافة المقال
     Route::post('store' , [ArticlesController::class,'store'])->name('Articles.store');
     // عرض صفحة تعديل المقال
     Route::get('edit/{id}' , [ArticlesController::class,'edit'])->name('Articles.edit');
     // تعديل بيانات المقال
     Route::post('update/{id}' , [ArticlesController::class,'update'])->name('Articles.update');
     // حذف مقال
     Route::get('delete/{id}' , [ArticlesController::class,'destroy'])->name('Articles.delete');
     //عرض المقال الواحد
     Route::get('show/{id}' , [ArticlesController::class,'show'])->name('Articles.show');
     // عرض شبكي لجميع المقالات بدون تفاصيل
     Route::get('grid' , [ArticlesController::class,'grid'])->name('Articles.grid');

     Route::post('uplode/{id}' , [ArticlesController::class,'uplode'])->name('Articles.uplode');

});

Route::group(['prefix'=>'Courses','middleware'=>'auth'],function () {
    //عرض صفحة الكورسات
    Route::get('/', [CoursesController::class,'index'])->name('Courses.index');
    // عرض صفحة اضافة كورس
    Route::get('create' , [CoursesController::class,'create'])->name('Courses.create');
    //اضافة الكورس
    Route::post('store' , [CoursesController::class,'store'])->name('Courses.store');
    // عرض صفحة تعديل الكورس
    Route::get('edit/{id}' , [CoursesController::class,'edit'])->name('Courses.edit');
    // تعديل بيانات الكورس
    Route::post('update/{id}' , [CoursesController::class,'update'])->name('Courses.update');
    //  كورس من
    Route::get('delete/{id}' , [CoursesController::class,'destroy'])->name('Courses.delete');
    //عرض الكورس
    Route::get('show/{id}' , [CoursesController::class,'show'])->name('Courses.show');
    // عرض شبكي لجميع الكورسات  بدون تفاصيل
    Route::get('grid' , [CoursesController::class,'grid'])->name('Courses.grid');

});

Route::group(['prefix'=>'Photos','middleware'=>'auth'],function () {
    //عرض صفحة الكورسات
    Route::post('/', [PhotosController::class,'uplode'])->name('Photos.index');


});
