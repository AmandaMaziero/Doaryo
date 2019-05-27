<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroControlador extends Controller
{
    public function index(){
        return view('cadastro.index');
    }
}
