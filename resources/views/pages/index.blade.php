@extends('layouts.main-layout')
@section('content')
    <main>
        <h2> Movies </h2>
        <ul id="movies">
            @foreach ($movies as $movie)
                <li class="movie">
                    <h3>
                        <a href="{{route('movie', $movie -> id)}}">
                            {{ $movie -> title }}
                        </a>
                    </h3>
                    <p>{{ $movie -> subtitle }}</p>
                    <span>{{ $movie -> release_date }}</span>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
