@extends('layouts.main-layout')

@section('content')

    <h1>
        Movies
    </h1>

    <ul>
        @foreach ($movies as $movie)

        <li>
            {{ $movie->title }} - {{ $movie->original_title }} - {{ $movie->nationality}} - {{$movie->date}} - {{$movie->vote}}
        </li>
        
        @endforeach
    </ul>
    
@endsection