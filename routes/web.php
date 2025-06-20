<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/brochure', function () {
    return view('components.brochure');
})->name('brochure');


Route::get('login/', [AuthController::class,'index'])->name('login');

Route::post('login/', [AuthController::class,'login'])->middleware('guest')->name('login.guest');

Route::get('logout/', [AuthController::class,'logout'])->middleware('auth')->name('logout');

Route::get('Dashboard/', RedirectController::class)->middleware('auth')->name('dashboard');