@extends('layout.master')

@section('content')

    <b><p>Latest News:</p></b><hr>
    <ul>
        @foreach($news as $singleNews)
        <a href="/news/{{ $singleNews->id}}"><li>{{ $singleNews->title }}</li></a>
        @endforeach
    </ul>

    <div claass='blog-pagination'>
        <a class='btn btn-outline-{{$news->currentPage() == 1 ? "secondary disabled" :
        "primary" }}' href="{{ $news->previousPageUrl() }}">Previous</a>
        
        <a class='btn btn-outline-{{ $news->hasMorePages() ? "primary" : 
        "secondary disabled"}}' 
        href="{{ $news->nextPageUrl() }}">Next</a> 
         Page {{ $news->currentPage() }} of {{ $news->lastPage()}}
    </div>
@endsection