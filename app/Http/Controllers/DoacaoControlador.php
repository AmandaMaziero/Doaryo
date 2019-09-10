<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisicao;
use App\User;
use DB;
use App\Carrinho;


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
        $requisicao = Requisicao::join('users', 'users.id', '=', 'Requisicoes.id')
            ->where('idRequisicao', $data->idRequisicao)->get();
        return view('doacao.requisicao', compact('requisicao', 'user'));
    }

    public function adicionar(Request $request){
        Requisicao::create([
            'nome'=>$request['nome'],
            'imagem'=>$request['imagem'],
            'descricao'=>$request['descricao'],
            'categoria'=>$request['categoria'],
            'status'=> $request['status'],
            'id'=>auth()->user()->id,
        ]);

        return redirect('/perfil');

    }

    public function atualizar(Request $request){
        $requisicao = Requisicao::findOrFail($request['idRequisicao']);
        $requisicao->nome = $request['nome'];
        $requisicao->imagem = $request['imagem'];
        $requisicao->descricao = $request['descricao'];
        $requisicao->categoria = $request['categoria'];
        $requisicao->status = $request['status'];
        $requisicao->id = auth()->user()->id;
        $requisicao->save();
        return redirect('/perfil');
    }

    public function categoria(Request $data){
        $categoria = Requisicao::where('categoria', $data->categoria)->get();
        return view('doacao.categoria', compact('categoria'));
    }

    public function finalizarDoacao(){
        $id = auth()->user()->id;
        $doacao = Carrinho::join('Requisicoes', 'Requisicoes.idRequisicao', '=', 'carrinho.idRequisicao')
            ->where('carrinho.id', $id)->get();
        return view('doacao.finalizar', compact('doacao'));
    }

    public function confirmar(Request $request){
        if($request->confirmar == 'checked'){
            Doacao::create([
                'Produto'=>$requi->nome,
                'DataDoacao'=>date(),
                'idDoador'=>auth()->user()->id,
                'idInst'=>$inst->id,
            ]);
        }else{
            $alerta = "<script>alert('Você deve clicar na caixa de confirmação para confirmar a doação!!!');</script>";
            echo "<script>alert('Você deve clicar na caixa de confirmação para confirmar a doação!!!');</script>";
            return redirect()->back()->$alerta;
        }
    }
}
