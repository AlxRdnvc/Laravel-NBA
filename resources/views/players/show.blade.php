@extends('layout.master')

@section('content')

    <p>{{ $player->first_name}} {{ $player->last_name }}</p>
    <p>{{ $player->email }}</p>
    <a href="/teams/{{ $player->team->id }}"><p>{{ $player->team->name }}</p></a>
    
@endsection