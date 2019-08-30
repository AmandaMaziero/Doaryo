<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisicao;
use App\User;

class DoacaoControlador extends Controller
{   

    public function index(Request $data) {
        $requisicao = Requisicao::orderBy('idRequisicao')->get();
        return view('doacao.index',compact('requisicao'));
    }

    public function cadastrar(){
        return view('doacao.cadastro');
    }

    public function editar(Request $data){
        $requisicao = Requisicao::where('idRequisicao', $data->idRequisicao)->get();
        return view('doacao.editar', compact('requisicao'));
    }

    public function excluir(){
        return view('doacao.cadastro');
    }
    
    public function visualizar(Request $data){
        //dd($data);
        $requisicao = Requisicao::where('idRequisicao', $data->idRequisicao)->get();
        //dd($requisicao);
        $instituicao = User::where('id', $data->id )->get();
        //dd($instituicao);
        return view('doacao.requisicao', compact('requisicao', 'instituicao'));
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

        return redirect('/perfil');

    }

    public function atualizar(Request $request){
        //dd($request);
        $requisicao = Requisicao::findOrFail($request['idRequisicao']);
        $requisicao->nome = $request['nome'];
        $requisicao->imagem = $request['imagem'];
        $requisicao->quantidade = $request['quantidade'];
        $requisicao->descricao = $request['descricao'];
        $requisicao->categoria = $request['categoria'];
        $requisicao->id = auth()->user()->id;
        $requisicao->save();
        return redirect('/perfil');
    }

    public function categoria(Request $data){
        $categoria = Requisicao::where('categoria', $data->categoria)->get();
        return view('doacao.categoria', compact('categoria'));
    }

}
