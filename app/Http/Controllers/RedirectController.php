<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function __invoke()
    {
        $user  = Auth::user();

        if ($user) {
            return view("layouts.aplication", compact("user"));
        }
    }
}
