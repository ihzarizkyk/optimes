<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * protect all method on this controller using auth middeware
     * 
     * **/
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    /**
     * Display a user profile using Auth
     * 
     * GET METHOD
     * **/
    public function index()
    {
        return view("dashboard.profile.index");
    }
}
