<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelBooking;

class HotelBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels=HotelBooking::all();
        return view('hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name'=>'required',
            'chechindate'=>'required',
            'checkoutdate'=>'required',
            'room'=>'required'
        ]);

        HotelBooking::create($validatedata);
        return redirect()->route('hotels.index')->with('success', 'Hotel booked successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel=HotelBooking::findOrFail($id);
        return view('hotels.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel=HotelBooking::findOrFail($id);
        return view('hotels.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'name'=>'required',
            'chechindate'=>'required',
            'checkoutdate'=>'required',
            'room'=>'required'
        ]);

        $hotel=HotelBooking::findOrFail($id);
        $hotel->update($validatedata);
        return redirect()->route('hotels.index')->with('success','Details Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = HotelBooking::findOrFail($id);
        $hotel->delete();

        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully.');
    }
}
