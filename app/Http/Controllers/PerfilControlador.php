<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Requisicao;
use App\itemDoado;
use App\Doacao;
use App\Carrinho;

class PerfilControlador extends Controller
{   
    public function doacoes($id) {
        $id = auth()->user()->id;
        return view('perfil.doacoes',compact('id'));
    }

    public function editar(Request $data) {
        $user = user::where('id', $data->id)->get();
        $id = auth()->user()->id;
        $type = auth()->user()->type;
        return view('perfil.editar',compact('id', 'type', 'user'));
    }

    public function sair() {
        $id = auth()->user()->id;
        $type = auth()->user()->type;
        return view('perfil.sair',compact('id', 'type'));
    }

    public function excluir($id) {
        $id = auth()->user()->id;
        $type = auth()->user()->type;
        return view('perfil.excluir',compact('id', 'type'));
    }

    public function destroy(){
        Auth::logout();
        User::destroy($request->id);
    }

    public function type(){
        $id = auth()->user()->id;
        $type = auth()->user()->type;
        $req = Requisicao::where ('id', $id)->where ('status', 'Pendente')->get();
        $doa = itemDoado::select('Requisicoes.Nome', 'users.name', 'doacao.dataDoacao', 'Requisicoes.Status')
        ->join('Requisicoes', 'Requisicoes.idRequisicao', '=', 'itemDoado.idRequisicao')
        ->join('doacao', 'doacao.idDoacao', '=', 'itemDoado.idDoacao')
        ->join('users', 'users.id', '=', 'Requisicoes.id')
        ->where ('itemDoado.idDoador', $id)->get();
    
        if ($type=="admin"){
            return view('perfil.admin',compact('id')); 
        }elseif($type=="user"){
            return view('perfil.doador',compact('id', 'doa'));
        }else{
            return view('perfil.inst',compact('id', 'req'));
        }
    }

    public function VerificarDoadores(){
        $data = "user";
        $user = User::where('type', $data)->get();
        return view('perfil.dados', compact('user'));
    }

    public function VerificarInstituicoes(){
        $data = "inst";
        $user = User::where('type', $data)->get();
        return view('perfil.dados', compact('user'));
    }

    public function atualizar(Request $request){
        //dd($request);
        if($request['password'] == $request['password_confirmation']){
            dd($request);
            $user = User::findOrFail($request['id']);
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = Hash::make($request['password']);
            $user->type = $request['type'];
            $user->save();
            return redirect('/perfil');
        }else{
            echo "erro";
        }
    }

    public function recebidas(){
        $id = auth()->user()->id;
        $req = Requisicao::where ('id', $id)->where ('status', 'Efetuada')->get();
        return view('perfil.efetuada',compact('id', 'req'));
    }

    public function aguardo(){
        $id = auth()->user()->id;
        $req = Requisicao::where ('id', $id)->where ('status', 'Aguardo')->get();
        return view('perfil.aguardo',compact('id', 'req'));
    }

    public function excluirConta(){
        $id = auth()->user()->id;
        itemDoado::where("idDoador", "=", $id)->delete();
        Doacao::where("idDoador", "=", $id)->delete();
        Carrinho::where("id", "=", $id)->delete();
        Requisicao::where("id", "=", $id)->delete();
        User::where("id", "=", $id)->delete();
        return redirect('home');
    }
    
}
