<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('register');
    }

    public function submitform(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $courses=$request->input('courses');
    }
}
