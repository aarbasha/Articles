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
            'title'=>'min:3|max:30|unique:Sections',
            'description'=>'min:5',
        ],[
            'title.min'=>'يجب ان لا يقل العنوان عن 3 احروف',
            'title.max'=>'يجب ان لا يزيد العنوان عن 30 حرف',
            'title.unique'=>'اسم القسم موجود مسبقاً',
            'description'=>'يجب ان لا يقل الوصف عن 3 احروف',
        ]);

        $Sections = new Section;
        $Sections->title = $request->title;
        $Sections->description = $request->description;
        $Sections->save();
        session()->flash('Add' , 'Section has been added successfully');
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
            'title'=>'min:3|max:30|unique:Sections',
            'description'=>'min:5',
        ],[
            'title.min'=>'يجب ان لا يقل العنوان عن 3 احروف',
            'title.max'=>'يجب ان لا يزيد العنوان عن 30 حرف',
            'title.unique'=>'اسم القسم موجود مسبقاً',
            'description'=>'يجب ان لا يقل الوصف عن 3 احروف',
        ]);

        $Sections = Section::where('id' , $id)->first();
        $Sections->title = $request->title;
        $Sections->description = $request->description;
        $Sections->save();
        session()->flash('edit' , 'Section has been Updated successfully');
        return redirect()->route('Sections.index');
    }


    public function destroy($id)
    {
        $Sections = Section::where('id' , $id);
        $Sections->delete();
        session()->flash('delete' , 'Section has been Deleted successfully');
        return redirect()->route('Sections.index');
    }
}
