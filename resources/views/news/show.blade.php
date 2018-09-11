@extends('layout.master')

@section('content')

    <h6>{{ $news->title }}</h6>
    <p>By {{ $news->user->name }}</p>
    <p>{{ $news->content }}</p>

    @if(count($news->teams))
        <ul class='list-unstyled'>
            @foreach($news->teams as $team)
                <li  class='btn'>
                    <a href="/news/team/{{ $team->name }}">{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif

@endsection