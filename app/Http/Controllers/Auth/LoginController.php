<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    // protected $redirectTo = '/';

    protected function redirectTo( ) {
    if (Auth::check() && Auth::user()->role == 'doctor') {
        return('doctor');
    }
    elseif (Auth::check() && Auth::user()->role == 'nurse') {
        return('nurse');
    }
    elseif (Auth::check() && Auth::user()->role == 'admission') {
        return('admissions');
    }
    elseif (Auth::check() && Auth::user()->role == 'headNurse') {
        return('headnurse');
    }
    elseif (Auth::check() && Auth::user()->role == 'admin') {
        return('admin/user');
    }
    elseif (Auth::check() && Auth::user()->role == 'medRecords') {
        return('medrecords');
    }
    else {
        return('/');
    }
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
