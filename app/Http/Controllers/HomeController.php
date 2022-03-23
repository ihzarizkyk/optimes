<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Showing view home index
     * 
     * GET METHOD
     * **/
    public function index()
    {
        return view("index");
    }
}
