<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        return view("dashboard.profile.index");
    }
}
