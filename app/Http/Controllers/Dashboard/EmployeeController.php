<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * delete data employee from database
     * 
     * GET METHOD
     * **/
    public function delete($id)
    {
        //
    }

    /**
     * Change Role user to admin
     * 
     * GET METHOD
     * **/
    public function admin(Request $req)
    {
        //
    }

    /**
     * Change Role user to manager
     * 
     * GET METHOD
     * **/
    public function manager(Request $req)
    {
        //
    }

    /**
     * Change Role user to employee
     * 
     * GET METHOD
     * **/
    public function employee(Request $req)
    {
        //
    }

    /**
     * Suspend User (can login, but can't access all feature)
     * 
     * GET METHOD
     * **/
    public function suspend(Request $req)
    {
        //
    }
}