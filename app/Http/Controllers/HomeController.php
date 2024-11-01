<?php

namespace App\Http\Controllers;

use App\Models\Legoset;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestSet = Legoset::where('activity', 2)
            ->latest()
            ->with('user')
            ->first();

        return view('home', compact('latestSet'));
    }
}
