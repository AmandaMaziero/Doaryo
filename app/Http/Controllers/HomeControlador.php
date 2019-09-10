<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlador extends Controller
{
    public function index() {
        return view('home');
    }

    public function termos() {
        return view('termos');
    }
}
