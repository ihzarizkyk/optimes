<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;

class ReportController extends Controller
{
    /**
     * protect all method on this controller using auth middeware
     * 
     * **/
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $task = Auth::user()->task()->get();
        return view("dashboard.report.index",compact("task"));
    }

    public function printPdf()
    {
        $task = Auth::user()->task()->get();
        $pdf = PDF::loadview("dashboard.report.pdf",["task" => $task]);
        return $pdf->stream();
    }

}
