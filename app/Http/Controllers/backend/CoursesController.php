<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Section;
use App\Models\backend\Article;
use App\Models\backend\Course;


class CoursesController extends Controller
{

    public function index()
    {
       $Courses = Course::all();
       $Sections = Section::all();
       return view('backend.views.Courses.Courses',compact('Courses','Sections'));
    }

    public function create()
    {
        $Courses = Course::all();
        $Sections = Section::all();
        return view('backend.views.Courses.Create',compact('Courses','Sections'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3|max:90',
            'info'=>'min:5',
            'url'=>'required',
            "photo" => "image|mimes:jpg,jpeg,gif,png|max:2048",
        ]);

        $Courses = new Course;
        $Courses->title = $request->title;
        $Courses->info = $request->info;
        $Courses->url = $request->url;
        $Courses->sections_id = $request->sections_id;
        $Courses->photo = $request->photo;
        $Courses->status = $request->status;
        $Courses->number_videos = $request->number_videos;

        if (!$request->sections_id) {
            session()->flash('Error',' حدث خطأ ..يرجى ادخال قسم واحد على الاقل');
            return redirect()->route('Sections.create');
        }else{
        $Courses->save();
        session()->flash('add','تم اضافة الكورس بنجاح');
        return redirect()->route('Courses.index');
        }
    }

    public function show($id)
    {
        $Courses = Course::where('id',$id)->first();
        $Sections = Section::all();
        return view('backend.views.Courses.info',compact('Courses','Sections'));
    }


    public function edit($id)
    {
        $Courses = Course::where('id',$id)->first();
        $Sections = Section::all();
        return view('backend.views.Courses.edit',compact('Courses','Sections'));
    }

    public function update(Request $request, $id)
    {
        $Courses = Course::where('id',$id)->first();
        $Courses->title = $request->title;
        $Courses->info = $request->info;
        $Courses->url = $request->url;
        $Courses->sections_id = $request->sections_id;
        $Courses->photo = $request->photo;
        $Courses->status = $request->status;
        $Courses->number_videos = $request->number_videos;
        if (!$request->sections_id) {
            session()->flash('Error',' حدث خطأ ..يرجى ادخال قسم واحد على الاقل');
            return redirect()->route('Sections.create');
        }else{
        $Courses->save();
        session()->flash('edit','تم تعديل الكورس بنجاح');
        return redirect()->route('Courses.index');
        }
    }

    public function destroy($id)
    {
        $Courses = Course::where('id',$id)->first();
        $Courses->delete();
        session()->flash('delete','تم حذف الكورس بنجاح');
        return back();
    }
}
