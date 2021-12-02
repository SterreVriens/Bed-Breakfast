<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomsController extends Controller
{
    public function index() {
        return view('kamers.onze-kamers');
    }

    public function roomDetail() {
        return view('kamers.kamer');
    }
}
