<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Legoset;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sets = Legoset::all();
        return view('admin.index', compact('sets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        $request->validate([
            'activity' => 'required'
        ]);
        $set = Legoset::findOrFail($id);

        $set->update([
            'activity' => $request->activity
        ]);
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
