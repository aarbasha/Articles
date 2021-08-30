<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\backend\Article;
use App\http\backend\Course;
use App\http\backend\Platform;
use App\http\backend\Section;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $total_Articles = Article::count();
        $total_Course = Course::count();
        $total_Platform = Platform::count();
        $total_Section = Section::count();
        return view('backend.views.index',compact('total_Articles','total_Course','total_Platform','total_Section'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('backend.views.index');

    }
}
