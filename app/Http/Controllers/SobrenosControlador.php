<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobrenosControlador extends Controller
{
    Public function index() {
        return view('sobrenos.index');
    }
}
