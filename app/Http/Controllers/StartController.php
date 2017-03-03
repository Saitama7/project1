<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StartController extends Controller
{
    public function check(){
        if (Auth::check()){
            return view('home');
        }
        else{
            return redirect('login');
        }
    }
}
