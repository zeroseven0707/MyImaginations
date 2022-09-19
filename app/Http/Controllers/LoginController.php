<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }public function inlogin(Request $request){
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }elseif(Auth::guard('web')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
    }
    public function register(){
        return view('register');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect('login');
    }
}
