<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::all();
        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'title'=>'required',
            'location'=>'required',
            'startdate'=>'required',
            'enddate'=>'required'
        ]);

        Project::create($validatedata);
        return redirect()->route('projects.index')->with('success','Added Successfully.');
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
        $project=Project::findOrFail($id);
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'title'=>'required',
            'location'=>'required',
            'startdate'=>'required',
            'enddate'=>'required'
        ]);

        $project=Project::findOrFail($id);
        $project->update($validatedata);
        return redirect()->route('projects.index')->with('success','Updated Successfully.');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project=Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success','Deleted Successfully.');
    }
}
