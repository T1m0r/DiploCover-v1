<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/tchome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //$this->middleware('guest:teacher', ['except' => ['logout']]);
        Auth::setDefaultDriver('teacher');
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
        $this->middleware('guest:employee')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    public function showLoginForm()
    {
        return view('auth.teacher.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('tch.home'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        $this->sendFailedLoginResponse($request);
        return redirect()->back()->withInput($request->only('email', 'remember'));
        //return redirect()->route('login.teacher');
    }


    public function logout()
    {
        //dd(Auth::user());
        Auth::guard('teacher')->logout();
        return redirect('/');
    }
}
