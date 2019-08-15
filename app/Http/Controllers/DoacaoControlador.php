<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisicao;

class DoacaoControlador extends Controller
{
    public function index() {
        $dados = Requisicao::orderBy('idRequisicao')->get();
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

    public function adicionar(Request $request){
        Requisicao::listar([
            'Nome'=>$request['nome'],
            'Imagem'=>$request
        ]);
    }
}
