<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //  Global Middleware
        // if($request->age < 18){
        //     die('You can not visit this site');
        // }

        //  Group Middleware
        // echo "Age check";
        if($request->age < 18){
            die('You can not visit this site');
        }
        return $next($request);
    }
}
