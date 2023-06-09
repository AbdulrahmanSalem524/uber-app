<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next, $guard='admin')
    {
        if(!auth()->guard($guard)->check()){
            return redirect(route('index'));
        }
        return $next($request);
    }
}
