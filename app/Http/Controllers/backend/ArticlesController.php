<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Section;
use App\Models\backend\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        $Sections = Section::all();
        return view('backend.views.Articles.Articles',compact('articles','Sections'));
    }

    public function create()
    {
        $articles = Article::all();
        $Sections = Section::all();
        return view('backend.views.Articles.Create',compact('articles','Sections'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'title'=>'min:3|max:90',
            'description'=>'min:5',
            'article'=>'required'
        ]);

        $articles = new article;
        $articles->title = $request->title;
        $articles->description = $request->description;
        $articles->sections_id = $request->sections_id;
        $articles->article = $request->article;
        $articles->Save();
        session()->flash('Add' , 'تم اضافة المقال بنجاح');
        return redirect()->route('Articles.index');

    }


    public function show($id)
    {
        $articles = Article::where('id',$id)->first();
        $Sections = Section::where('id',$id)->first();
        return view('backend.views.Articles.show',compact('articles','Sections'));
    }


    public function edit($id)
    {
        $articles = Article::where('id',$id)->first();
        $Sections = Section::all();
        return view('backend.views.Articles.edit',compact('articles','Sections'));

    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title'=>'min:3|max:90',
            'description'=>'min:5',
            'article'=>'required'
        ]);

        $articles = Article::where('id',$id)->first();
        $articles->title = $request->title;
        $articles->description = $request->description;
        $articles->sections_id = $request->sections_id;
        $articles->article = $request->article;
        $articles->Save();
        session()->flash('Add' , 'تم تعديل المقال بنجاح');
        return redirect()->route('Articles.index');
    }


    public function destroy($id)
    {
        $articles = Article::where('id' , $id)->first();
        $articles->delete();
        session()->flash('Add' , 'تم حذف المقال بنجاح');
        return redirect()->route('Articles.index');

    }
}
