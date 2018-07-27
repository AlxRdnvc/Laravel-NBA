<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'email' => 'required | email',
            'password' => 'required'
        ]);

        $credentials = request()->only(['email', 'password']);

        if(!auth()->attempt($credentials))
        {
            return redirect()->back()->withErrors([
                'message' => "Bad credentials. Please try again!"
            ]);
        } else {

            if(auth()->user()->is_verified) {

                return redirect('/teams');

            } else {

                $this->destroy();

                return back()->withErrors(['message' => 'You are not verified, please check your email for verification!']);

            }
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
