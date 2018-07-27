<?php

namespace App\Http\Controllers;
use App\Mail\UserVerified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:6',
            ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'email_token' => str_random(30)
        ]);

        Mail::to($user->email)->send(new UserVerified($user));

        return redirect('/login')->withErrors(['message' => 'You are successufully registered! Please check your email for verification...']);
    }

    public function verify(User $user, $email_token)
    {
        
            $user->update([
                'is_verified' => 1,
                'email_token' => $email_token
            ]);

            auth()->login($user);

            return redirect('/login');
     }
}