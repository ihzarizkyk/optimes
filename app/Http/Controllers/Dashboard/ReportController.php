<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}
