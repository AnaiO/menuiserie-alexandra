<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {

            return view('admin.login');
        }

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect()->intended('admin.home');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        } 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('admin.login');
    }
}
