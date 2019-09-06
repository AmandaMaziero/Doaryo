<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Requisicao;

class CarrinhoControlador extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $carrinho = Carrinho::join('Requisicoes', 'Requisicoes.idRequisicao', '=', 'carrinho.idRequisicao')
            ->where('carrinho.id', $id)->get();
        return view('carrinho.index',compact('carrinho'));
    }

    public function criar(Request $request){
        $id = auth()->user()->id;
        $a = Carrinho::select('idRequisicao')
            ->where('id', $id)
            ->where('idRequisicao', $request->idRequisicao)
            ->get();
        if (count($a) == 0){
            Carrinho::create([
                'idRequisicao'=>$request['idRequisicao'],
                'id'=>auth()->user()->id,
            ]);
            
        }

        return redirect('carrinho');
    }

    public function apagarInd($id){
        $a = Carrinho::destroy($id);
        return redirect()->route('carrinho');
    }

    public function apagarTodos(){
        $id = auth()->user()->id;
        $a = Carrinho::select('idRequisicao')
            ->where('id', $id);
        $a->delete();
        return redirect('carrinho');
    }

}


