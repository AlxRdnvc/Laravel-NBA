@extends('layout.master')

@section('content')
    <div>
        <b><p>Team:</p></b><hr>
        <p>{{ $team->name }}</p>
        <p>{{ $team->email }}</p>
        <p>{{ $team->address }}</p>
        <p>{{ $team->city }}</p>
    </div><br><br>

    <div>
        <b><p>Players:</p></b><hr>
        @foreach($team->players as $player )
        <a href="/players/{{$player->id}}"><p>{{ $player->first_name }} {{ $player->last_name}}</p></a>
        @endforeach
    </div><br><br>

    <div>
        <b><p>Latest News:</p></b><hr>
        <a href="/news/team/{{ $team->name }}">News</a>
    </div><br><br>

    <div class="form-group">
    <b><p>Comments:</p></b><hr>
        <form method="POST" action="/teams/{{ $team->id }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="content"><b><p style="font-size: 0.7rem;">Add Comment:<p></b></label>
                <textarea name="content" class="form-control" id="content"></textarea>
                @include('partials.error-message', ['fieldName' => 'content'])
            </div>
                <button type="submit" class="btn btn-primary">Add comment</button>
        </form>
    </div>
    <div>
        @foreach($team->comments as $comment)
            <b><p style="font-size: 0.7rem; margin-bottom: 20;">{{ $comment->user->name }}</p></b>
            <p style="margin-bottom: 20px;">{{ $comment->content }}</p><hr>
        @endforeach
    </div>
</div>
@endsection