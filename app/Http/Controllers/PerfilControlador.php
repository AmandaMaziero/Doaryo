<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilControlador extends Controller
{   
    public function doacoes($id) {
        $id = auth()->user()->id;
        return view('perfil.doacoes',compact('id'));
    }

    public function editar($id) {
        $id = auth()->user()->id;
        return view('perfil.editar',compact('id'));
    }

    public function sair() {
        $id = auth()->user()->id;
        return view('perfil.sair',compact('id'));
    }

    public function excluir($id) {
        $id = auth()->user()->id;
        return view('perfil.excluir',compact('id'));
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

    //->select('column')->from('table')->where('where clause')->get();
    
}
