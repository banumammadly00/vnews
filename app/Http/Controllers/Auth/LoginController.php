<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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


   // protected $redirectTo = '/';
    protected function redirectTo()
    {
        return Session::get('url');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct( )
    {
        Session::put('url', url()->previous());
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'name';
    }
}
