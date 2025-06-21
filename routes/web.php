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

Route::get('Dashboard/', [RedirectController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('Profile/', [RedirectController::class, 'profile'])->middleware('auth')->name('profile');

Route::get('Business/', [RedirectController::class, 'business'])->middleware('auth')->name('business');

Route::get('Networs/', [RedirectController::class, 'networs'])->middleware('auth')->name('networs');