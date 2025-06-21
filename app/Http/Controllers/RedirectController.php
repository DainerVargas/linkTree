<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function dashboard()
    {
        $user  = Auth::user();

        if ($user) {
            return view("layouts.aplication", compact("user"));
        }
    }

    public function profile()
    {
        $user  = Auth::user();

        if ($user) {
            return view("layouts.profile", compact("user"));
        }
    }

    public function business()
    {
        $user  = Auth::user();

        if ($user) {
            return view("layouts.business", compact("user"));
        }
    }

    public function networs()
    {
        $user  = Auth::user();

        if ($user) {
            return view("layouts.networs", compact("user"));
        }
    }
}
