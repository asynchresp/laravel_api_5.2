<?php

namespace App\Http\Middleware;

use Closure;

class Cros
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
        return $next($request)
                   ->header('Access-Control-Allow-Origin','*')
                   ->header('Access-Control-Allow','GET,PUT,POST,PATCH,OPTIONS')
                   ->header('Access-Control-Allow-Headers','Content-Type,X-Authorization','application/x-www-form-urlencoded');
    }
}
