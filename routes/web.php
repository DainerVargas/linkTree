<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/brochure', function () {
    return view('components.brochure');
})->name('brochure');
