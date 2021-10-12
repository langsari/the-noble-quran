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



        if (! ($request->id < 115 && $request->id > 0 && filter_var($request->id,FILTER_VALIDATE_INT)) )
        return redirect()->route('Al_quran.home');
        return $next($request);

    }
}
