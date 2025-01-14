<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
        // if (auth()->check() && auth()->user()->userrole === 2) {
        //     return $next($request);
        // }

        // // If the user is not an admin, redirect them to a different page
        // return redirect('/admin')->with('error', 'You do not have access.');
    }
}
