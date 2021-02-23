<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function form()
    {
        return view('login.form');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('login/dashboard', ['User' => $user]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();  
            return redirect()->intended('login/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function createUser(Request $request)
    {
        $post = new User();
        $post->name = $request->input('name'); 
        $post->email = $request->input('email');
        $post->password = hash::make($request->input('password'));
        $post->save();
        return redirect('/login');
    }
}
