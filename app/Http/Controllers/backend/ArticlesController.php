<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
// use App\Traits\articleTraits;
use Illuminate\Http\Request;
use App\Models\backend\Section;
use App\Models\backend\Article;
use App\Models\backend\Photo;

class ArticlesController extends Controller
{

    // use articleTraits; //  اسم الفانكشن الخارجية لحفظ الصور بشكل ديناميكي

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
            'description'=>'min:5|max:90',
            'article'=>'required',
            "photo" => "image|mimes:jpg,jpeg,gif,png",
        ],[
            'title.min'=>'يجب الا يقل العنوان عن ثلاث احروف',
            'title.max'=>'يجب الا يزيد العنوان عن 90 حرف',
            'description.min'=>'يجب الا يقل الوصف عن خمس احروف',
            'description.max'=>'يجب الا يزيد الوصف عن 90 حرف',
            'article.required'=>'حقل المقال مطلوب',
            "photo.image" => "يجب وضع صورة فقط",
            "photo.mimes" => "صيغ الصور المدعومة, jpeg,gif,png",
        ]);

        $articles = new article;
        if ($request->photo) {
            $file_name =  $this->SavaImagse($request->photo,'images/articles');
            $articles->photo = $file_name; //   => تخزين اسم الصورة في قاعدة البيانات
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
            session()->flash('Add' , 'تم نشر المقال بنجاح');
            return redirect()->route('Articles.index');
        }
        }elseif(!$request->photo){
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
            session()->flash('Add' , 'تم نشر المقال بنجاح');
            return redirect()->route('Articles.index');
        }

    }
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
            'description'=>'min:5|max:90',
            'article'=>'required',
            "photo" => "image|mimes:jpg,jpeg,gif,png",
        ],[
            'title.min'=>'يجب الا يقل العنوان عن ثلاث احروف',
            'title.max'=>'يجب الا يزيد العنوان عن 90 حرف',
            'description.min'=>'يجب الا يقل الوصف عن خمس احروف',
            'description.max'=>'يجب الا يزيد الوصف عن 90 حرف',
            'article.required'=>'حقل المقال مطلوب',
            "photo.image" => "يجب وضع صورة فقط",
            "photo.mimes" => "صيغ الصور المدعومة, jpeg,gif,png",
        ]);

        $articles = Article::where('id',$id)->first();
        if (!$request->photo) {
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
            session()->flash('edit' , 'تم تحديث بيانات المقال بنجاح');
            return redirect()->route('Articles.index');

            }
        }elseif($request->photo){
            $file_name =  $this->SavaImagse($request->photo,'images/articles');
            $articles->photo = $file_name;
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
            session()->flash('edit' , 'تم تحديث بيانات المقال بنجاح');
            // return redirect()->route('Articles.index');
            return back($request);

            }
        }
    }

    public function destroy($id)
    {
        $articles = Article::where('id' , $id)->first();
        $articles->delete();
        session()->flash('delete' , 'تم حذف المقال بنجاح');
        return back();

    }

    public function grid(){
        $articles = Article::all();
        $Sections = Section::all();
        return view('backend.views.Articles.grid',compact('articles','Sections'));
    }



}
