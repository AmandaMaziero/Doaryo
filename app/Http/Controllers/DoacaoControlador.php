<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisicao;

class DoacaoControlador extends Controller
{   

    public function index(Request $data) {
        $requisicao = Requisicao::orderBy('idRequisicao')->get();
        return view('doacao.index',compact('requisicao'));
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
    
    public function visualizar(Request $data){
        $requisicao = Requisicao::where('idRequisicao', $data->idRequisicao)->get();
        return view('doacao.requisicao', compact('requisicao'));
    }

    public function adicionar(Request $request){
        Requisicao::create([
            'nome'=>$request['nome'],
            'imagem'=>$request['imagem'],
            'quantidade'=>$request['quantidade'],
            'descricao'=>$request['descricao'],
            'categoria'=>$request['categoria'],
            'id'=>auth()->user()->id,
        ]);

        $type = auth()->user()->type;
        if($type == "admin"){
            return redirect()->route('admin');
        }elseif($type == "inst"){
            return redirect()->route('inst');
        }

    }

    public function categoria(Request $data){
        $categoria = Requisicao::where('categoria', $data->categoria)->get();
        return view('doacao.categoria', compact('categoria'));
    }

}
