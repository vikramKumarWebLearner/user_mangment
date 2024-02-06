<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        


        $totalUserAll = User::count();
        $totalUser = User::where('role_as','0')->count();
       
        return view('admin.dashboard', compact('totalUserAll','totalUser'));
    }
}
