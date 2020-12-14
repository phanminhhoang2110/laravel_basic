<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        //Phải đăng kí middleware trong kernel.php
        echo Auth::user();
        if(Auth::user()->role->name != $role){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
