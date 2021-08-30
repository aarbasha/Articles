<?php

namespace App\Http\Controllers\frontend;

use  Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Section;
use App\Models\backend\Article;
use App\Models\backend\Course;
use App\Models\backend\Platform;


class showController extends Controller
{
    public function home(){
        // عرض صفحة الموقع الرئيسية
        $Articles = Article::paginate(3);
        $Sections = Section::all();
        return view('frontend.views.index',compact('Articles','Sections'));
    }

    //########################################################################################

    public function showArticles(){
        // عرض صفحة  المقالات للزائر
        $Articles = Article::all();
        $Sections = Section::all();
        return view('frontend.views.Articles.Articles',compact('Articles','Sections'));

    }

    public function sort($id){
        // عرض المقالات حسب الصنف
        $Articles = Article::where('sections_id', $id)->get();
        $Sections = Section::all();
        return view('frontend.views.Articles.sort_Articles',compact('Articles','Sections'));
    }

    public function oneArticle($id){
           // عرض صفحة  المقال الواحد  للزائر
        $Articles = Article::where('id',$id)->first();
        $Sections = Section::where('id',$id)->first();
        $xxx = Section::all();
        return view('frontend.views.Articles.oneArticle',compact('Articles','Sections','xxx'));
    }

    //########################################################################################


    public function showCourses(){
        // عرض صفحة  الكورسات التعليمية للزائر
        $Courses = Course::all();
        $Platforms = Platform::all();
        return view('frontend.views.Courses.Courses' , compact('Courses','Platforms'));
    }

    public function sortCourse($id){
        // عرض المقالات حسب الصنف
        $Courses = Course::where('platforms_id', $id)->get();
        $Platforms = Platform::all();
        return view('frontend.views.Courses.courses_sort',compact('Courses','Platforms'));
    }

    public function oneCourses($id){
        // عرض صفحة  المقال الواحد  للزائر
     $Courses = Course::where('id',$id)->first();
     $Platforms = Platform::where('id',$id)->first();
     $zzz = Platform::all();
     return view('frontend.views.Courses.course_info',compact('Courses','Platforms','zzz'));
 }
}
