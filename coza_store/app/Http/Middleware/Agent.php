<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Agent
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
        //return $next($request);
        if(Auth::check()&&Auth::user()->role == 'agent'){
            return $next($request);
        } elseif(Auth::check()&&Auth::user()->role == 'user'){
            return redirect('login');
        } else {
            return redirect('login');
        }
    }
}
