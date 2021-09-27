<?php

namespace App\Http\Middleware;

use Closure;

class CheckSurahId
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
        if (!($request->id < 115 && $request->id > 0) )
        return redirect()->route('home');
        return $next($request);

    }
}
