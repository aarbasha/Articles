<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;      // from Web Site
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        //عرض صفحة الادمنز
        $users = User::all();
        return view('backend.views.manger.manger',compact('users'));
    }

    public function create()
    {
        return view('backend.views.manger.create');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>  Hash::make($request->password),
            'location' =>$request->location,
            'phone1' =>$request->phone1,
            'facebook' =>$request->facebook,
            'youtube' =>$request->youtube,
            'linkedin' =>$request->linkedin,
            'instagram' =>$request->email,
            'telegram' =>$request->telegram,
            'whatsapp' =>$request->whatsapp,

        ]);
        session()->flash('Add', ' تم اضافة المستخدم بنجاح');
        return redirect()->route('manger.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::where('id',$id)->first();
        return view('backend.views.manger.update' ,compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::where('id',$id)->first();
        $users->update([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>  Hash::make($request->password),
            'location' =>$request->location,
            'phone1' =>$request->phone1,
            'facebook' =>$request->facebook,
            'youtube' =>$request->youtube,
            'linkedin' =>$request->linkedin,
            'instagram' =>$request->email,
            'telegram' =>$request->telegram,
            'whatsapp' =>$request->whatsapp,
        ]);
        session()->flash('edit', ' تم تحديث بيانات المستخدم بنجاح  ');
        return redirect()->route('manger.index');
    }

    public function destroy($id)
    {
       $users = User::where('id',$id)->first();
       $users->delete();
       session()->flash('delete' , 'تم حذف المستخدم بنجاح');
       return back();
    }
}
