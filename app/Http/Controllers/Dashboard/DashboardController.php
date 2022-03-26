<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        return view("dashboard.index");
    }
}
