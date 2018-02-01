<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard - главния страница в админ панеле
    public function dashboard(){
      return view('admin.dashboard');
    }
}
