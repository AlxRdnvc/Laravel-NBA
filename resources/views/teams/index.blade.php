@extends('layout.master')

@section('content')
    <ul>
        @foreach($teams as $team)
        <a href="/teams/{{ $team->id}}"><li>{{ $team->name }}</li></a>
        @endforeach
    </ul>
@endsection