<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class School
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
        if(Auth::check()){
            if(Auth::guard('teacher')->check()){
                if(Auth::user()->hasRole('School')){
                    $sch = \App\Models\School::where('schoolID',Auth::user()->schoolID)->first();
                    if(Auth::user()->teachID == $sch->teachID){
                        return $next($request);
                    }
                    return redirect()->back()->with('fail',Lang::get('messages.School_authfail_teachID'));
                }
                return redirect()->back()->with('fail',Lang::get('messages.School_authfail_role'));
            }
            return redirect()->back()->with('fail',Lang::get('messages.School_authfail_role'));
        }
        return redirect('/');

    }
}
