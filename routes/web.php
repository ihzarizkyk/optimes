<?php

use Illuminate\Support\Facades\Route;

Route::get("/","HomeController@index");


// Auth Routes

Route::get("/auth/signin","Auth\LoginController@index")->name("login");
Route::post("/auth/postsignin","Auth\LoginController@postSignIn")->name("signin");
Route::get("/auth/signout","Auth\LoginController@Signout")->name("signout");

Route::get("/auth/signup","Auth\RegisterController@index");
Route::post("/auth/postsignup","Auth\RegisterController@postSignUp")->name("signup");

// Dashboard Routes

Route::get("/dashboard","Dashboard\DashboardController@index")->name("dashboard");