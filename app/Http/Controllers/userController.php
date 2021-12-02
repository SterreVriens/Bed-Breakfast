<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function loginView(){
        return view('user.login');
    }
    public function registerView(){
        return view('user.register');
    }
}
