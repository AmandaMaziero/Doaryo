<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Requisicao;

class CarrinhoControlador extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $carrinho = Carrinho::where('id', $id)->get();
        foreach($carrinho as $carrinhos){
            $carrinhos = Requisicao::where('idRequisicao', $carrinho->idRequisicao)->get();
        }
        return view('carrinho.index',compact('carrinhos'));
    }

    public function criar(Request $request){
        dd($request);
        Carrinho::create([
            'idRequisicao'=>$request['idRequisicao'],
            'id'=>auth()->user()->id,
        ]);

        return redirect('carrinho');
    }

    public function adicionar(){

    }

    public function removerUm(){

    }

    public function removerTodos(){

    }

}


