@extends('layouts.main-layout')
@section('content')
    <main>
        <li class="movie">
            <h3>{{ $movie -> title }}</h3>
            <p>{{ $movie -> subtitle }}</p>
            <span>{{ $movie -> release_date }}</span>
        </li>
    </main>
@endsection
