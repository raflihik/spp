<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view ('auth.login');
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/dashboard');
        }
 
        return back()->with('salah', 'maaf email atau password yang anda masukan salah!');
    }

    public function logout(){
      
        Session::flush();
        return redirect('/');
      
    }
}
