<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public const admin = "1";
    public const manager = "2";
    public const member = "3";
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        $role = Auth::user()->role;

        if(!in_array($user->hasRole(), $roles)){
            return redirect()->back();
        }
        return $next($request);
    }
}
