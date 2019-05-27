<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituicoesControlador extends Controller
{
    public function index() {
        return view('instituicoes.index');
    }
}
