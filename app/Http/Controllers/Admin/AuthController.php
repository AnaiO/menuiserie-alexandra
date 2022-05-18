<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {

            if (Auth::check()) {
                return redirect(route('admin.home'));
            }

            return view('admin.login');
        }

        if ($request->isMethod('post')) {

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
            ]);
            
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect()->intended(route('admin.home'));
            }

            return back()->withErrors([
                'email' => 'Une erreur est survenue, réessayez',
            ])->onlyInput('email');
        } 
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->intended('login');
    }
}
