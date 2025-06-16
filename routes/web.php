<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.brochure');
})->name('home');

