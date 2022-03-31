<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
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
     * display data on index file view -> dashboard/employee/index
     * 
     * GET METHOD
     * **/   
    public function index()
    {
        if(Auth::user()->role == "admin")
        {
            $user = User::all();
            return view("dashboard.employee.index",compact("user"));
        }else{
            return abort(403);
        }
    }

    /**
     * delete data employee from database
     * 
     * GET METHOD
     * **/
    public function delete($id)
    {
        $user = User::findOrfail($id);
        if(Auth::user()->role == "admin")
        {
            $user->delete();
            return back();  
        }else{
            return abort(403);
        }

    }

    /**
     * Change Role user to admin
     * 
     * GET METHOD
     * **/
    public function admin(Request $req)
    {
        if(Auth::user()->role == "admin")
        {
            DB::table("users")->where("id",$req->id)->update([
                "role" => "admin"]);
            return back();
        }else{
            return abort(403);
        }

    }

    /**
     * Change Role user to manager
     * 
     * GET METHOD
     * **/
    public function manager(Request $req)
    {
        if(Auth::user()->role == "admin")
        {
            DB::table("users")->where("id",$req->id)->update([
                "role" => "manager"]);
            return back();            
        }else{
            return abort(403);
        }

    }

    /**
     * Change Role user to employee
     * 
     * GET METHOD
     * **/
    public function employee(Request $req)
    {
        if(Auth::user()->role == "admin")
        {
            DB::table("users")->where("id",$req->id)->update([
                "role" => "employee"]);
            return back();
        }else{
            return abort(403);
        }
    }

}