<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["guest"])->except("Signout");
    }

    public function index()
    {
        return view("auth.signin");
    }

    public function postSignIn(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required"]);

        if(Auth::attempt(["username" => $req->username,"password" => $req->password]))
        {
            return redirect("/dashboard");
        }else{
            return back();
        }

    }

    public function Signout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect("/auth/signin");
    }
}
