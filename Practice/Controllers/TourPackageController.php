<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackage;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours=TourPackage::all();
        return view('tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'packagename'=>'required',
            'destination'=>'required',
            'duration'=>'required',
            'price'=>'required'
        ]);

        TourPackage::create($validatedata);
        return redirect()->route('tours.index')->with('success','Booked Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tour=TourPackage::findOrFail($id);
        return view('tours.show',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tour=TourPackage::findOrFail($id);
        return view('tours.edit',compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'packagename'=>'required',
            'destination'=>'required',
            'duration'=>'required',
            'price'=>'required'
        ]);

        $tour=TourPackage::findOrFail($id);
        $tour->update($validatedata);
        return redirect()->route('tours.index')->with('success','Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour=TourPackage::findOrFail($id);
        $tour->delete();
        return redirect()->route('tours.index')->with('success','Deleted Successfully');
    }
}
