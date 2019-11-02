<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/home';

    public function postLogin(Request $request) {
        $request->validate([
            'email' => 'required',
            'password'=> 'required'
        ]);
        $credential = ['email'=> $request->email ,'password'=> $request->password];

        if(Auth::guard('admin')->attempt($credential)) {
            return redirect('/admin');
        }
        if(Auth::guard('teacher')->attempt($credential)) {
            return redirect('/teacher');
        }
        if(Auth::guard('web')->attempt($credential)) {
            return redirect('/teacher');
        }

        return redirect('/login')->with('fail','username or email not found');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
