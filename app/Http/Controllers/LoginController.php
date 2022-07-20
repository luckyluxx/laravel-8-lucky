<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login',
            'active'=>'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        
        
        return back()->with('loginError', 'Make sure you have an account, please try it again!'); //tidak menggunakan errorWith atas dasar keamanan supaya publik tidak tahu apakah email sudah terdaftar atau kata sandi salah
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('loggedOut','Log out succeed!');
    }
}
