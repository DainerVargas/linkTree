<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("Auth.login");
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");

        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect("Dashboard");
        }

        return back()->withErrors(["password" => "* Usuario o contraseña incorrecta"]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect("login/");
    }
}
