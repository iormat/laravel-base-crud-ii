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

    <form action="{{ route('store') }}" method="post">
        @csrf
        @method('POST')

        <label for="title">
            Title&colon;
            <input type="text" name="title" placeholder="title">
        </label>
        <label for="subtitle">
            Subtitle&colon;
            <input type="text" name="subtitle" placeholder="subtitle">
        </label>
        <label for="release_date">
            Date&colon;
            <input type="date" name="release_date" placeholder="release_date">
        </label>
        <button>Aggiungi nuovo film</button>
    </form>
@endsection
