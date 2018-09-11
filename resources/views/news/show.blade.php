@extends('layout.master')

@section('content')

    <h6>{{ $news->title }}</h6>
    <p>By {{ $news->user->name }}</p>
    <p>{{ $news->content }}</p>

    @if(count($news->teams))
        <ul>
            @foreach($news->teams as $team)
            <li><a href="/teams/{{$team->id}}">{{ $team->name }}</a></li>
            @endforeach
        </ul>
    @endif

@endsection