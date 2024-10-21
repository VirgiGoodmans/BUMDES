<?php

namespace app\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }
        return redirect('/login');
    }
}
