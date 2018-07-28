@extends('layout.master')

@section('content')

    <h6>{{ $news->title }}</h6>
    <p>By {{ $news->user->name }}</p>
    <p>{{ $news->content }}</p>

@endsection