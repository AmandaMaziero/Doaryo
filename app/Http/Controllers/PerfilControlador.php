<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        if ($type=="admin"){
            return view('perfil.admin',compact('id')); 
        }elseif($type=="user"){
            return view('perfil.doador',compact('id'));
        }else{
            return view('perfil.inst',compact('id'));
        }
    }

    public function VerificarDoadores(){
        
    }

    public function atualizar(Request $request){
        //dd($request);
        if($request['password'] == $request['password_confirmation']){
            //dd($request);
            $user = User::findOrFail($request['id']);
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = $request['password'];
            $user->save();
            return redirect('/perfil');
        }else{
            echo "erro";
        }
    }
    
}
