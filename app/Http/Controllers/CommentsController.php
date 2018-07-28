<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Team;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;


class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('forbidden-comment')->only('store');
    }

    public function store($team_id)
    {
        $this->validate(request(), [
            'content' => 'required | min:10'
        ]);

        $team = Team::find($team_id);

        Comment::create([
            'content' => request('content'),
            'team_id' => $team->id,
            'user_id' => auth()->user()->id
        ]);

        Mail::to($team->email)->send(new CommentReceived($team));

        return redirect('teams/'.$team->id);
    }
}
