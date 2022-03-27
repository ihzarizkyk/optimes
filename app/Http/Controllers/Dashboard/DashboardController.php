<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $taskCount = Auth::user()->task()->get();
        return view("dashboard.index",compact('taskCount'));
    }
}
