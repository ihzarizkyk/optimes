<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Protect all method on this controller using auth middleware
     * 
     * **/
    public function __construct()
    {
        return $this->middleware(["auth"]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Auth::user()->task()->get();
        $tasks = Task::with("user")->get();
        $grader = Task::with("user_grader")->get();
        return view("dashboard.task.index",compact("task","tasks","grader"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.task.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            "name" => "required",
            "description" => "required"]);

        DB::table("task")->insert([
            "name" => $req->name,
            "description" => $req->description,
            "user_id" => Auth::Id(),
            "created_at" => now()]);

        return redirect("/dashboard/task");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrfail($id);
        if(Auth::user()->id == $task->user_id)
        {
            return view("dashboard.task.edit",compact("task"));
        }else{
            return abort(403);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $req->validate([
            "name" => "required",
            "description" => "required"]);

        DB::table("task")->where("id",$req->id)->update([
            "name" => $req->name,
            "description" => $req->description]);

        return redirect("/dashboard/task");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrfail($id);
        if(Auth::user()->id == $task->user_id)
        {
            $task->delete();
            return back();
        }else{
            return abort(403);
        }
    }
}
