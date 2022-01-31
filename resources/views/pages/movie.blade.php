@extends('layouts.main-layout')
@section('content')
    <li class="movie">
        <h3>{{ $movie -> title }}</h3>
        <p>{{ $movie -> subtitle }}</p>
        <span>{{ $movie -> release_date }}</span>
    </li>
@endsection
