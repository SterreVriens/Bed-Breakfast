<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function overons(){
        return view('Over-ons');
    }
    public function facaliteiten(){
        return view('facaliteiten');
    }
}
