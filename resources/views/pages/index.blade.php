@extends('layouts.main-layout')
@section('content')
    <main>
        <h2> Movies </h2>
        <ul id="movies">
            @foreach ($movies as $movie)
                <li class="movie">
                    <h3>{{ $movie -> title }}</h3>
                    <p>{{ $movie -> subtitle }}</p>
                    <span>{{ $movie -> release_date }}</span>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
