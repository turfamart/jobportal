<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function registration(){
        return view('front.account.register');
    }

    public function login(){
        
    }
}
