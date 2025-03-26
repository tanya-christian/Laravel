<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=MenuItem::all();
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name'=>'required',
            'category'=>'required',
            'desc'=>'required',
            'price'=>'required'
        ]);

        MenuItem::create($validatedata);
        return redirect()->route('items.index')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item=MenuItem::findOrFail($id);
        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'name'=>'required',
            'category'=>'required',
            'desc'=>'required',
            'price'=>'required'
        ]);

        $item=MenuItem::findOrFail($id);
        $item->update($validatedata);
        return redirect()->route('items.index')->with('success','Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=MenuItem::findOrFail($id);
        $item->delete();
        return redirect()->route('items.index')->with('success','Deleted Successfully');
    }
}
