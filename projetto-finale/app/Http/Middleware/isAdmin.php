<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {

        if (Auth::user() && Auth::user()->is_admin) {
            return $next($request);
        }
        return redirect()->route('homepage')->with('message', 'solo gli amministrattori possono accedere');
    }
}
