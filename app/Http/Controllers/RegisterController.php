<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=> 'Register',
            'active'=> 'register'
        ]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name'      =>   'required|max:255|min:3',
            'username'  =>   'required|min:3|max:20|unique:users',
            'email'     =>   'required|email|unique:users',
            'password'  =>   'required|min:8|max:18'
        ]);
        // ennkripsi password menggunakan bcrypt 
        // $validatedData['password']=bcrypt($validatedData['password']);
        // atau bisa juga menggunakan
        $validatedData['password']=Hash::make($validatedData['password']);
        
        // push ke database
        User::create($validatedData);

        // $request->session()->flash('success', 'Regristation succesfully!  Your account have been made.');
        return redirect('/login')->with('success', 'Registration succesfully!  Your account have been made.');
    }
}
