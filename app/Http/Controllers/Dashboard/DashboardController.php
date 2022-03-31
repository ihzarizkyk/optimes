<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $taskCount = Auth::user()->task()->get();
        $task = Task::all();
        $score = Auth::user()->task()->sum("grade");
        return view("dashboard.index",compact('taskCount','score','task'));
    }
}
