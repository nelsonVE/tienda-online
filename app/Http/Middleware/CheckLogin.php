<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    public function handle($request, Closure $next)
    {
        if(!$request->session()->exists('user_id'))
            return redirect('/');
        
        return $next($request);
    }
}
