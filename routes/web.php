<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\showController;

// عرض صفحة الموقع الرئيسية
Route::get('/',[showController::class,'home'])->name('home');
// عرض صفحة تعديل اعدادات الموقع الخارجي
Route::get('/setting',[showController::class,'setting'])->name('setting');
//###########################################################################################
//عرض صفحة المقالات الخارجية
Route::get('/showArticles',[showController::class,'showArticles'])->name('showArticles');
//عرض المقال الواحد
Route::get('/showArticles/{id}',[showController::class,'oneArticle'])->name('oneArticle');
//تصنيف المقالات حسب النوع
Route::get('/sortArticle/{id}',[showController::class,'sort'])->name('article.sort');
//###########################################################################################
//عرض صفحة الكورسات الخارجية
Route::get('/showCourses',[showController::class,'showCourses'])->name('showCourses');
//عرض الكورس الواحد
Route::get('/showCourses/{id}',[showController::class,'oneCourses'])->name('oneCourses');
//تصنيف الكورس حسب النوع
Route::get('/sortCourse/{id}',[showController::class,'sortCourse'])->name('Courses.sort');
//###########################################################################################

