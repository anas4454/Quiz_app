<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::check()){
            return redirect()->route('login');
        }

        if(Auth::user()->role==0){
            return $next($request);
        }
        else{
            return redirect()->route('dashboard')->with('message' , "you have no access to user dashboard");
        }


        // return $next($request);
    }
}
