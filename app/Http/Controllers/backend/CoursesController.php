<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Platform;
use App\Models\backend\Section;
use App\Models\backend\Article;
use App\Models\backend\Course;


class CoursesController extends Controller
{

    public function index()
    {
       $Courses = Course::all();
       $Platforms = Platform::all();
       return view('backend.views.Courses.Courses',compact('Courses','Platforms'));
    }

    public function create()
    {
        $Courses = Course::all();
        $Platforms = Platform::all();
        return view('backend.views.Courses.Create',compact('Courses','Platforms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'min:3|max:90',
            'info'=>'min:5',
            'url'=>'required',
            "photo" => "image|mimes:jpg,jpeg,gif,png",
        ],[
            // 'title.unique'=>'اسم الكورس موجود مسبقاً',
            'title.min'=>'يجب الا يقل العنوان عن 3 حروف',
            'title.max'=>'يجب الا يقل العنوان عن 3 حروف',
            'info.min'=>'يجب الا يقل العنوان عن 3 حروف',
            'url.required'=>'الرجاء ادخال رابط الكورس بشكل صحيح',
            'photo.mimes'=>'صيغة الصورة يجب ان تكون jpg jpeg gif png فقط'
        ]);

        $Courses = new Course;
        if ($request->photo) { // في حال يوجد صورة
            $file_name =  $this->SavaImagse($request->photo,'images/courses');
            $Courses->photo = $file_name;
            $Courses->title = $request->title;
            $Courses->info = $request->info;
            $Courses->url = $request->url;
            $Courses->platforms_id = $request->platforms_id;
            $Courses->status = $request->status;
            $Courses->number_videos = $request->number_videos;

            if (!$request->platforms_id) { // في حال لايوجد قسم
            session()->flash('Error',' حدث خطأ ..يرجى ادخال قسم واحد على الاقل');
            return redirect()->route('Platforms.create');
            }else{
            $Courses->save();
            session()->flash('Add','تم اضافة الكورس بنجاح');
            return redirect()->route('Courses.index');
            }

        } elseif(!$request->photo) { // في حال لايوجد صورة
            $Courses->title = $request->title;
            $Courses->info = $request->info;
            $Courses->url = $request->url;
            $Courses->platforms_id = $request->platforms_id;
            $Courses->status = $request->status;
            $Courses->number_videos = $request->number_videos;

            if (!$request->platforms_id) {  // في حال لايوجد قسم
            session()->flash('Error',' حدث خطأ ..يرجى ادخال قسم واحد على الاقل');
            return redirect()->route('Platforms.create');
            }else{
            $Courses->save();
            session()->flash('Add','تم اضافة الكورس بنجاح');
            return redirect()->route('Courses.index');
            }
        }
    }

    public function show($id)
    {
        $Courses = Course::where('id',$id)->first();
        $Platforms = Platform::all();
        return view('backend.views.Courses.info',compact('Courses','Platforms'));
    }


    public function edit($id)
    {
        $Courses = Course::where('id',$id)->first();
        $Platforms = Platform::all();
        return view('backend.views.Courses.edit',compact('Courses','Platforms'));
    }

    public function update(Request $request, $id)
    {
        if (!$request->photo) {
            $Courses = Course::where('id',$id)->first();
            $Courses->title = $request->title;
            $Courses->info = $request->info;
            $Courses->url = $request->url;
            $Courses->platforms_id = $request->platforms_id;
            $Courses->status = $request->status;
            $Courses->number_videos = $request->number_videos;
            if (!$request->platforms_id) {
            session()->flash('Error',' حدث خطأ ..يرجى ادخال منصة تعليمية واحد على الاقل');
            return redirect()->route('Platforms.create');
            }else{
            $Courses->save();
            session()->flash('edit','تم تعديل الكورس بنجاح');
            return redirect()->route('Courses.index');

            }
        }elseif($request->photo){
                $Courses = Course::where('id',$id)->first();
                $file_name =  $this->SavaImagse($request->photo,'images/courses');
                $Courses->photo = $file_name;
                $Courses->title = $request->title;
                $Courses->info = $request->info;
                $Courses->url = $request->url;
                $Courses->platforms_id = $request->platforms_id;
                $Courses->status = $request->status;
                $Courses->number_videos = $request->number_videos;
                if (!$request->platforms_id) {
                session()->flash('Error',' حدث خطأ ..يرجى ادخال منصة تعليمية واحد على الاقل');
                return redirect()->route('Platforms.create');
                }else{
                $Courses->save();
                session()->flash('edit','تم تعديل الكورس بنجاح');
                return redirect()->route('Courses.index');

            }
        }

    }

    public function destroy($id)
    {
        $Courses = Course::where('id',$id)->first();
        $Courses->delete();
        session()->flash('delete','تم حذف الكورس بنجاح');
        return back();
    }

    protected function SavaImagse($photo ,$folder){
        // save photo in storag file in public/images/articles
        // ###########################################################
        //جلب لاحقة الصورة
            $file_ex = $photo->getClientOriginalExtension();
        //اعادة تسمية الصورة
            $file_name = time() . "." . $file_ex;
        // تحديد مسار الصورة
            $path = $folder;
        //نقل الصورة
            $photo->move($path ,$file_name );
        // ############################################################
            return $file_name;
    }

    public function grid(){

        $Courses = Course::all();
        $Platforms = Platform::all();
        return view('backend.views.Courses.Grid' , compact('Courses','Platforms'));
    }
}
