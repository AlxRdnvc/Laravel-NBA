@extends('layout.master')

@section('content')

@if(auth()->check())
        <h1 style="text-align:center;">Hello {{ auth()->user()->name }}</h1>
@endif
        <h2 style="text-align:center;">Welcome to NBA website!</h2>

@endsection