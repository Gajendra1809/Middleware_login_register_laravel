<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    
    public function dash(){
        return view("auth.dash");
    }

    public function dash2(){
        return view("auth.dash2");
    }

    public function dashboard3(){
        return view("auth.dashboard3");
    }
}
