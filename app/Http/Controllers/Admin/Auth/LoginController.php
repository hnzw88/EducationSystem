<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    public function showLoginForm()
    {
        return view('admin/login');
    }

    public function login(Request $requset)
    {
        $credentials = $requset->only(['email','password']);
        //ユーザー情報が見つかったらログイン
        if(Auth::guard('admins')->attempt($credentials)){
            //ログイン後に表示するページにリダイレクト
            return redirect()->route('show.top')->with([
                'login_msg'=>'ログインしました。',
            ]);
        }
        return back()->withErrors([
            'login'=>['ログインできませんでした']
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admins')->logout();
        $request->session()->regenerateToken();
        //ログインページにリダイレクト
        return redirect()->route('show.login');
    }



   // use AuthenticatesUsers{
     // logout as perfomLogout;
    //}

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
      //  $this->middleware('guest:admin')->except('logout');
    //}

    //protected function guard()
    //{
      //  return Auth::guard('admin');
    //}

    //public function logout(Request $request)
    //{
      //  $this->performLogout($request);
        //return redirect('admin/login');
    //}

    //public function showLoginForm()
    //{
      //  return view('admin/login');
    //}

   
}
