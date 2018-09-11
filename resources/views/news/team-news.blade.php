@extends('layout.master')

@section('content')

    @foreach($news as $singleNews)
        <h1 href="/news/{{ $singleNews->id}}"> {{ $singleNews->title }}</h1>
        <p><b>Team:</b>
            @foreach($singleNews->teams as $team)
                {{ $team->name }}
            @endforeach
        </p>
        <p><b>Created by:</b> {{$singleNews->user->name}}</p><hr>
        <p>Content: {{ $singleNews->content }}</p><br><br>
    @endforeach

 @endsection