<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('user.dahsboard');
       }elseif(Auth::user()->hasRole('wo')){
        return view('dashboard');
   }
   }

   public function myprofile()
   {
    return view('myprofile');
   }
}
