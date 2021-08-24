<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Section;

class SectionsController extends Controller
{

    public function index()
    {
        $Sections = Section::all();
        return view('backend.views.Sections.Sections', compact('Sections'));
    }


    public function create()
    {
        return view('backend.views.Sections.Create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3|max:90',
            'description'=>'min:5',
        ]);

        $Sections = new Section;
        $Sections->title = $request->title;
        $Sections->description = $request->description;
        $Sections->save();
        session()->flash('Add' , 'تم اضافة القسم بنجاح');
        return redirect()->route('Sections.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Sections = Section::where('id' , $id)->first();
        return view('backend.views.Sections.edit',compact('Sections'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:3|max:90',
            'description'=>'min:5',
        ]);

        $Sections = Section::where('id' , $id)->first();
        $Sections->title = $request->title;
        $Sections->description = $request->description;
        $Sections->save();
        session()->flash('edit' , 'تم تعديل القسم بنجاح');
        return redirect()->route('Sections.index');
    }


    public function destroy($id)
    {
        $Sections = Section::where('id' , $id);
        $Sections->delete();
        session()->flash('delete' , 'تم حذف القسم بنجاح');
        return redirect()->route('Sections.index');
    }
}
