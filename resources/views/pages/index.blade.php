@extends('layouts.main-layout')
@section('content')
    <main>

        <button id="add_film">
            <a href="{{ route('create') }}">
                Aggiungi un nuovo film
            </a>
        </button>

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
                    <button>
                        <a href="{{ route('edit', $movie -> id) }}">
                            Modifica film
                        </a>
                    </button>
                    <button>
                        <a href="{{ route('delete', $movie -> id) }}">
                            Elimina definitivamente il film
                        </a>
                    </button>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
