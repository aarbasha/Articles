<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
USE App\Models\backend\Platform;

class platformsController extends Controller
{

    public function index()
    {
        $Platforms = Platform::all();
        return view('backend.views.Platforms.Platforms', compact('Platforms'));
    }

    public function create()
    {
        return view('backend.views.Platforms.Create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3|max:30|unique:Platforms',
            'description'=>'min:5',
        ],[
            'title.min'=>'يجب ان لا يقل العنوان عن 3 احروف',
            'title.max'=>'يجب ان لا يزيد العنوان عن 30 حرف',
            'title.unique'=>'اسم المصة موجود مسبقاً',
            'description'=>'يجب ان لا يقل الوصف عن 3 احروف',
        ]);

        $Platforms = new Platform;
        $Platforms->title = $request->title;
        $Platforms->description = $request->description;
        $Platforms->save();
        session()->flash('Add' , 'Platforms has been added successfully');
        return redirect()->route('Platforms.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Platforms = Platform::where('id' , $id)->first();
        return view('backend.views.Platforms.edit',compact('Platforms'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:3|max:30|unique:Platforms',
            'description'=>'min:5',
        ],[
            'title.min'=>'يجب ان لا يقل العنوان عن 3 احروف',
            'title.max'=>'يجب ان لا يزيد العنوان عن 30 حرف',
            'title.unique'=>'اسم المصة موجود مسبقاً',
            'description'=>'يجب ان لا يقل الوصف عن 3 احروف',
        ]);

        $Platforms = Platform::where('id' , $id)->first();
        $Platforms->title = $request->title;
        $Platforms->description = $request->description;
        $Platforms->save();
        session()->flash('edit' , 'Platforms has been Updated successfully');
        return redirect()->route('Platforms.index');
    }


    public function destroy($id)
    {
        $Platforms = Platform::where('id' , $id);
        $Platforms->delete();
        session()->flash('delete' , 'Platforms has been Deleted successfully');
        return redirect()->route('Platforms.index');
    }
}
