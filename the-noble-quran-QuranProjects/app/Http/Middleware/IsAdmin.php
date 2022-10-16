<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if(auth()->user()->is_admin == 1){
        return $next($request);
    }
    if(auth()->user()->is_admin == 2){
        return $next($request);
    }
    if(auth()->user()->is_admin == 3){
        return $next($request);
    }
       return redirect('home')->with('error',"You dom't allow to  access");
    }

}