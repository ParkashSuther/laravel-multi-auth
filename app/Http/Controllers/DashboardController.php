<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    function index(){
        if(Auth::user()->hasRole('superadministrator')){
            return view('dashboard.superadministrator');
        }elseif(Auth::user()->hasRole('administrator')){
            return view('dashboard.administrator');
        }elseif(Auth::user()->hasRole('user')){
            return view('dashboard.user');
        }elseif(Auth::user()->hasRole('role_name')){
            return view('dashboard.role_name');
        }
    }
}
