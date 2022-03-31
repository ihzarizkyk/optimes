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

Route::get("/dashboard/profile","Dashboard\ProfileController@index")->name("profile");

Route::get("/dashboard/task","Dashboard\TaskController@index")->name("task");

Route::get("/dashboard/task/create","Dashboard\TaskController@create")->name("task.new");
Route::post("/dashboard/task/post","Dashboard\TaskController@store")->name("task.store");
Route::get("/dashboard/task/{id}/delete","Dashboard\TaskController@destroy")->name("task.delete");
Route::get("/dashboard/task/{id}/edit","Dashboard\TaskController@edit")->name("task.edit");
Route::post("/dashboard/task/update","Dashboard\TaskController@update")->name("task.update");
Route::get("/dashboard/task/{id}/preview","Dashboard\GradeController@preview")->name("task.preview");
Route::post("/dashboard/task/{id}/grade","Dashboard\GradeController@grade")->name("task.grade");
Route::get("/dashboard/report","Dashboard\ReportController@index")->name("report");
Route::get("/dashboard/report/pdf","Dashboard\ReportController@printPdf")->name("report.pdf");

// User Permission
Route::get("/dashboard/user","Dashboard\EmployeeController@index")->name("employee");
Route::get("/dashboard/user/{id}/delete","Dashboard\EmployeeController@delete")->name("employee.delete");
Route::get("/dashboard/user/{id}/admin","Dashboard\EmployeeController@admin")->name("employee.admin");
Route::get("/dashboard/user/{id}/employee","Dashboard\EmployeeController@employee")->name("employee.employee");
Route::get("/dashboard/user/{id}/manager","Dashboard\EmployeeController@manager")->name("employee.manager");

