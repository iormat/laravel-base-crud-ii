@extends('layouts.main-layout')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $movie -> id) }}" method="post">
        @csrf
        @method('POST')

        <label for="title">
            Title&colon;
            <input type="text" name="title" value="{{$movie -> title}}" placeholder="title">
        </label>
        <label for="subtitle">
            Subtitle&colon;
            <input type="text" name="subtitle" value="{{$movie -> subtitle}}" placeholder="subtitle">
        </label>
        <label for="release_date">
            Date&colon;
            <input type="date" name="release_date" value="{{$movie -> release_date}}" placeholder="release_date">
        </label>
        <button>
            Update changes
        </button>
    </form>
@endsection
