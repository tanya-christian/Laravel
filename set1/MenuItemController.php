<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function home(){
        return view('home');
    }

    public function menu(){
        return view('menu');
    }

    public function order(){
        return view('order');
    }

    public function submitform(Request $request){
        $item=$request->input('item');
        $category=$request->input('category');
        $des=$request->input('des');
        $price=$request->input('price');

        return view('orderplaced',compact('item','category','des','price'));
    }

    

}
