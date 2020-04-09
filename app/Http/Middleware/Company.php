<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class Company
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
            if(Auth::guard('employee')->check()){
                if(Auth::user()->hasRole('Company')){
                    $comp = \App\Models\Company::where('companyID',Auth::user()->companyID)->first();
                    if(Auth::user()->emplID == $comp->emplID){
                        return $next($request);
                    }
                    return redirect()->back()->with('fail',Lang::get('messages.Company_authfail_emplID'));
                }
                return redirect()->back()->with('fail',Lang::get('messages.Company_authfail_role'));
            }
            return redirect()->back();
        }
        return redirect('/');

    }
}
