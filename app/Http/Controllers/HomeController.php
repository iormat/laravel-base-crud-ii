<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('pages.index', compact('movies'));
    }

    public function show($id) {
        $movie = Movie::findOrFail($id);
        return view('pages.movie', compact('movie'));
    }
}
