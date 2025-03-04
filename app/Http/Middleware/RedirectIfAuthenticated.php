<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'teacher':
                if(Auth::guard($guard)->check()){
                    return redirect('/tchome');
                }
                break;

            case 'employee':
                if(Auth::guard($guard)->check()){
                    return redirect('/emphome');
                }
                break;

            case 'admin':
                if(Auth::guard($guard)->check()){
                    return redirect('/admin');
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/sthome');
                }
                break;
        }

        return $next($request);
    }
}
