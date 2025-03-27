<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts=Account::all();
        return view('accounts.index',compact('accounts'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'acc_no'=>'required',
            'acc_type'=>'required',
            'balance'=>'required',
            'owner_name'=>'required'
        ]);
        
        Account::create($validatedata);
        return redirect()->route('accounts.index')->with('success','Added Successfully.');
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
        $account=Account::findOrFail($id);
        return view('accounts.edit',compact('account'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'acc_no'=>'required',
            'acc_type'=>'required',
            'balance'=>'required',
            'owner_name'=>'required'
        ]);
        
        $account=Account::findOrFail($id);
        $account->update($validatedata);
        return redirect()->route('accounts.index')->with('success','Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $account=Account::findOrFail($id);
        $account->delete();
        return redirect()->route('accounts.index')->with('success','Deleted Successfully.');
    }
}
