<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["guest"]);
    }

    public function index()
    {
        return view("auth.signup");
    }

    public function postSignUp(Request $req)
    {

        $req->validate([
            "name" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required"]);
        
        DB::table("users")->insert([
            "name" => $req->name,
            "username" => $req->username,
            "email" => $req->email,
            "password" => Hash::make($req->password)]);

        return redirect("/auth/signin");
    }
}
