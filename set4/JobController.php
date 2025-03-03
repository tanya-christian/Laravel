<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function home(){
        return view('home');
    }

    public function jobs(){
        return view('jobs');
    }

    public function apply(){
        return view('apply');
    }

    public function submitform(Request $request){
        $title=$request->input('title');
        $category=$request->input('category');
        $des=$request->input('des');
        $salary=$request->input('salary');

        return view('jobs', compact('title','category','des','salary'));
    }


}
