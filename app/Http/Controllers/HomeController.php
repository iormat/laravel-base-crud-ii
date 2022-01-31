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

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $data = $request -> validate([
            'title' => 'required|string|max:50',
            'subtitle' => 'required|string|max:50',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::create($data);

        return redirect() -> route('movie', $movie -> id);
    }
}
