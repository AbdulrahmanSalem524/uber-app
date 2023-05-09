<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Customer
{
    public function handle(Request $request, Closure $next, $guard='customer')
    {
        if(!auth()->guard($guard)->check()){
            return redirect(route('home'));
        }
        return $next($request);
    }
}
