<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->back()->withErrors(['email' => 'Thông tin xác thực không hợp lệ'])->withInput();
    }
    public function logout()
    {
        if (!Auth::check()) {
            return redirect()->route('login.form');
        }

        Auth::logout();

        return redirect()->route('login.form');
    }
}
