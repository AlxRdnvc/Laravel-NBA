@extends('layout.master')

@section('content')
    <div><hr>
        <p>Team:</p><hr>
        <p>{{ $team->name }}</p>
        <p>{{ $team->email }}</p>
        <p>{{ $team->address }}</p>
        <p>{{ $team->city }}</p>
    </div><hr>
    <div>
        <p>Players:</p><hr>
        @foreach($team->players as $player )
        <a href="/players/{{$player->id}}"><p>{{ $player->first_name }} {{ $player->last_name}}</p></a>
        @endforeach
    </div>
@endsection