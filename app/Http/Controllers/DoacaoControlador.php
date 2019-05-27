<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacaoControlador extends Controller
{
    public function index() {
        return view('doacao.index');
    }
}
