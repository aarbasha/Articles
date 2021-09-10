<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Photo;
use App\Models\backend\Article;

class photosController extends Controller
{
    public function uplode(Request $request){
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->move('images/articles/' ,$fileName );
            if ($path) {

                Article::create([
                    'path' => $fileName,
                    // 'articles_id' => Article::where('id' ,$id)->first()
                ]);
               //insert file to Database
                return response()->json(['uplode_status' =>'success'],200);
            }else{
                //note insert file to Database
                return response()->json(['uplode_status' =>'failed'],401);
            }
        }
    }

    // use Dropzine js uplode multe img ####### Update ######
    public function uplodeEdit(Request $request , $id){
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            // $articles_id = Article::where('id' , $id)->first()->id;
            $path = $file->move('images/articles/' ,$fileName );
            if ($path) {
                // $fileName = Photo()->article()->Create([
                //         'path' => $fileName,
                //         'articles_id' => $articles_id
                // ]);
               //insert file to Database
                return response()->json(['uplode_status' =>'success'],200);
            }else{
                //note insert file to Database
                return response()->json(['uplode_status' =>'failed'],401);
            }
        }
    }
}
