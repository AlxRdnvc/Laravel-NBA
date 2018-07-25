@extends('layout.master')

@section('content')
    <form method="POST" action="/register">
         {{ csrf_field() }}  

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name">
            @include('partials.error-message' , ['fieldName' => 'name'])

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email"></input>
            @include('partials.error-message' , ['fieldName' => 'email'])
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password"></input>
            @include('partials.error-message' , ['fieldName' => 'password'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        
    </form>
@endsection