<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('auth.login');
   
    }

    public function  loginProcess(LoginRequest $request)  {
        $user_inputs = $request->only('email','password');
        if(!Auth::attempt($user_inputs,$request->remember)){
            return redirect()->back()->with('error','Authentication failed');
        }
        return view('dashboard.index')->with('success','Successfully logged in');
        
    }

    public function logout() {
        Auth::logout();
        return view('auth.login');
        
    }
}
