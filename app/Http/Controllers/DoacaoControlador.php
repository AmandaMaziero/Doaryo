<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisicao;
use App\User;
use App\Doacao;
use App\Carrinho;
use App\itemDoado;


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
        return view('doacao.requisicao', compact('requisicao'));
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

    public function apagarUm($id){
        $a = Requisicao::destroy($id);
        return redirect('perfil');
    }

    public function apagarTodos(){
        $id = auth()->user()->id;
        $a = Requisicao::select('idRequisicao')
            ->where('id', $id);
        $a->delete();
        return redirect('perfil');
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
        $id = auth()->user()->id;
        $requi = Carrinho::select('carrinho.idRequisicao','Requisicoes.id')
        ->join('Requisicoes', 'Requisicoes.idRequisicao', '=', 'carrinho.idRequisicao')
        ->where('carrinho.id', $id)->get();
        if($request->concorda == 'concorda'){

            $doacao = Doacao::create([
                'dataDoacao'=>date('Y-m-d'),
                'idDoador'=>auth()->user()->id,
            ]);

            $idDoacao = $doacao->idDoacao;
            
            foreach ($requi as $requis => $value){
            //dd($requis);
                itemDoado::create([
                    'idDoacao'=>$idDoacao,
                    'idDoador'=>$id,
                    'idRequisicao'=>$value['idRequisicao'],
                    'idInst'=>$value['id'],
                ]);
            }

            $removerCarrinho = Carrinho::select('idRequisicao')
            ->where('id', $id);
            $removerCarrinho->delete();
            return redirect(route('home'))->with('sucesso','Sua doação foi efetuada com sucesso!!!');
        }else{
            return redirect()->back()->with('aviso','Você deve clicar na caixa de confirmação para confirmar a doação!!!');
        }
    }
}
