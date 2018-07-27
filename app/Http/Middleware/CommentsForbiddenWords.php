<?php

namespace App\Http\Middleware;

use Closure;

class CommentsForbiddenWords
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $words = [ 'idiot', 'stupid', 'hate'];  

        if(str_contains(request('content'), $words))
        {
                return response(view('partials.forbidden-comment'));
        }

        return $next($request);
    }
}
