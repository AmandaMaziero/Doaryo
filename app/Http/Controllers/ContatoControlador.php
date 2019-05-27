<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoControlador extends Controller
{
    public function index() {
        return view('contato.index');
    }
}
