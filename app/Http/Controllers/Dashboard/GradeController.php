<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function preview($id)
    {
        $task = Task::findOrfail($id);
        if(Auth::user()->role == "manager")
        {
            return view("dashboard.task.grade",compact("task"));
        }else{
            return abort(403);
        }
    }

    public function grade(Request $req)
    {
        $req->validate([
            "grade" => "required"]);

        DB::table("task")->where("id",$req->id)->update([
            "grade" => $req->grade,
            "grader_id" => Auth::Id(),
            "grader_name" => Auth::user()->name,
            "updated_at" => now()]);

        return redirect("/dashboard/task");
    }
}
