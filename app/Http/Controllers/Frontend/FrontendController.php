<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class FrontendController extends Controller
{
    public function index()
    {
        

        return view('frotend.index');
    }


    public function login()
    {
        $user = User::where("role_as",1)->first();
        Auth::login($user);
        return redirect()->route("userlist");
    }
}
