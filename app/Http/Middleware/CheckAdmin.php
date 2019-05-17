<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{

    public function handle($request, Closure $next)
    {
        if($request->session()->get('user_type') != 2)
            return redirect('/');
            
        return $next($request);
    }
}
