<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('index');
});

Route::get('/auth/login', function(){
    return view('auth.login');
});

Route::get('/auth/register', function(){
    return view('auth.register');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
});