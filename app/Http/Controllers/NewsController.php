<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use App\Team;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('user')->latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $teams = Team::all();
        return view('news.create', compact('teams'));
    }

    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
        'title' => 'required',
        'content' => 'required',
        'teams' => 'required|array'
        ]);

        $news = News::create([
        'title' => request('title'),
        'content' => request('content'),
        'user_id' => auth()->user()->id
        ]);

        $news->teams()->attach(request('teams'));
        session()->flash('success', 'Thank you for publishing article on www.nba.com.'); 
        return redirect('/news');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showTeamNews($name)
    {
        // $news = Team::with('news')->find($team)->news()->latest()->paginate(5);
        // return view('news.team-news', compact('news'));

        $team = Team::where('name', $name)->first();
        $news = $team->news()->latest()->paginate(5);
     
        return view('news.team-news', compact('news'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
