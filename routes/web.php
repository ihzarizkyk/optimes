<?php

use Illuminate\Support\Facades\Route;

Route::get("/","HomeController@index");

Route::get("/auth/signin","Auth\LoginController@index");
Route::post("/auth/postsignin","Auth\LoginController@postSignIn")->name("signin");
Route::get("/auth/signout","Auth\LoginController@Signout")->name("signout");

Route::get("/auth/signup","Auth\RegisterController@index");
Route::post("/auth/postsignup","Auth\RegisterController@postSignUp")->name("signup");