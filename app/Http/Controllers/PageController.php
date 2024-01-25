<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index()
    {
        $test = 42;
        $films = Movie::all();

        return view('home', compact('test', 'films'));
    }
    //
}
