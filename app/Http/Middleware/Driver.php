<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Driver
{
    public function handle(Request $request, Closure $next, $guard='driver')
    {
        if(!auth()->guard($guard)->check()){
            return redirect(route('index'));
        }
        return $next($request);
    }
}
