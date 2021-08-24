<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        return view('backend.views.Articles..software.tables');
    }


    public function create()
    {
        return view('backend.views.Articles..software.add');
        // return "شسيشسيشسيشسيشسيشس";
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
