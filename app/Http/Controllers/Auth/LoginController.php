<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Session;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request){
    $input = [
                'username' => $request->input('username'),
                'password' => $request->input('password')
        ];
        if(Auth::attempt($input)){
            if(Auth::user()->role === 'admin'){
                return redirect('/admin');
            }
            return redirect('/petugas');
        }else{
             Session::flash('failed','Username atau password salah !');
             return redirect('/');   
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
