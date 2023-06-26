<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function ProsesLogout(Request $req)
    {
        $req->session()->flush();
        Auth::logout();
        return redirect('login');
    }
}