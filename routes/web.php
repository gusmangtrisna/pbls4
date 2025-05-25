<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/tiketWna', function () {
    return view('tiketWna');
});

Route::get('/tiketLokal', function () {
    return view('tiketLokal');
});
