@extends('layout.master')

@section('content')
    <form method="POST" action="/login">
    {{ csrf_field() }}

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
            <button type="submit" class="btn btn-primary">Login</button>
            @include('partials.error-message', ['fieldName' => 'message'])

        </div> 

    </form>
@endsection
