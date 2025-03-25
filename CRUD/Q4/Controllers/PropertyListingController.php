<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyListing;

class PropertyListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties=PropertyListing::all();
        return view('properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'address'=>'required',
            'type'=>'required',
            'price'=>'required',
            'desc'=>'required'
        ]);

        PropertyListing::create($validatedata);
        return redirect()->route('properties.index')->with('success','Successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property=PropertyListing::findOrFail($id);
        return view('propeties.edit',compact('properties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'address'=>'required',
            'type'=>'required',
            'price'=>'required',
            'desc'=>'required'
        ]);

        $property=PropertyListing::findOrFail($id);
        $property->update($validatedata);
        return redirect()->route('properties.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property=PropertyListing::findOrFail($id);
        $property->delete();
        return redirect()->route('properties.index')->with('success','Deleted Successfully');
    }
}
