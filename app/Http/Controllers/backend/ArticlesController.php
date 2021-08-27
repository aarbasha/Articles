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
        $Sections = Section::select('title');
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
            'description'=>'min:5|max:30',
            'article'=>'required',
            "photo" => "image|mimes:jpg,jpeg,gif,png|max:2048",
        ]);

        // $img_name = time() . "." . $request->photo->getClientOriginalExtension();

        $articles = new article;
        $articles->title = $request->title;
        $articles->description = $request->description;
        $articles->sections_id = $request->sections_id;
        $articles->article = $request->article;
        // $articles->photo = $img_name;

        if (!$request->sections_id) {
            session()->flash('Error',' حدث خطأ ..يرجى ادخال قسم واحد على الاقل');
            return redirect()->route('Sections.create');
        }else{
            $articles->Save();
            session()->flash('Add' , 'The article has been successfully added');
            return redirect()->route('Articles.index');
        }
        // $request->photo->move(public_path("uplode"), $img_name);
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
        if (!$request->sections_id) {
            session()->flash('Error',' حدث خطأ ..يرجى ادخال قسم واحد على الاقل');
            return redirect()->route('Sections.create');
        }
        else{
        $articles->Save();
        session()->flash('Add' , 'The article has been successfully Updated');
        return redirect()->route('Articles.index');
        }
    }

    public function destroy($id)
    {
        $articles = Article::where('id' , $id)->first();
        $articles->delete();
        session()->flash('Add' , 'The article has been successfully Deleted');
        return back();

    }

    public function grid(){
        $articles = Article::all();
        $Sections = Section::all();
        return view('backend.views.Articles.grid',compact('articles','Sections'));
    }

}
