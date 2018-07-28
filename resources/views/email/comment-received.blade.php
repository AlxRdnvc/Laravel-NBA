<h2 style="text-align:center;">Hello {{ $team->name }}</h2>
<p>You have a new comment on your <a href="{{ url('/teams/'. $team->id) }}">page</a></p>

<p>comment content:</p> 

<p>{{ $team->comments->last()->content }}</p>