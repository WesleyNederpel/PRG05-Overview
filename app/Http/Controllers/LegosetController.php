<?php

namespace App\Http\Controllers;

use App\Models\Legoset;
use Illuminate\Http\Request;

class LegosetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  //http://localhost:8000/legosets
    {
        $sets = Legoset::all();
        return view('legosets.index', compact('sets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //http://localhost:8000/legosets/create
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //http://localhost:8000/legosets
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id) //http://localhost:8000/legosets/1
    {
        $sets = Legoset::find($id);

        return view('legosets.show', compact('sets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Legoset $legoset) //http://localhost:8000/legosets/1/edit
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Legoset $legoset) //http://localhost:8000/legosets/1
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Legoset $legoset) //http://localhost:8000/legosets/1
    {
        //
    }
}
