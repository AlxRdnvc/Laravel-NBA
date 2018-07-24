<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NBA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
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


</body>
</html>