
<h2>Hello {{ $user->name }}</h2>
<h2>You have to verify your account with a link below.</h2>
<a href="{{ url('/verifyEmail/'.$user->id.'/'.$user->email_token) }}">Click the following link to verify your email</a> 

