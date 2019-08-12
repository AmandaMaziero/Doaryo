<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacaoControlador extends Controller
{
    public function index() {
        return view('doacao.index');
    }

    public function cadastrar(){
        return view('doacao.cadastro');
    }

    public function editar(){
        return view('doacao.editar');
    }

    public function excluir(){
        return view('doacao.cadastro');
    }

    public function visualizar(){
        return view('doacao.requisicao');
    }
}
