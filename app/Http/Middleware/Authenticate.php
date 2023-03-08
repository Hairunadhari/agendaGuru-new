<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
