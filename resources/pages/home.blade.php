@extends('layouts.main-layout')

@section('content')

    <h1>
        Movies
    </h1>

    <ul>
        @foreach ($movies as $movie)

        <li>
            {{ $movie->title }} - {{ $movie->original_title }}
        </li>
        
        @endforeach
    </ul>
    
@endsection