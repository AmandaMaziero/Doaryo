<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilControlador extends Controller
{
    public function adminView() {
        $id = auth()->user()->id;
        return view('perfil.admin',compact('id'));
    }

    public function doadorView() {
        $id = auth()->user()->id;
        return view('perfil.doador',compact('id'));
    }

    public function instView() {
        $id = auth()->user()->id;
        return view('perfil.inst',compact('id'));
    }
    
    public function doacoes($id) {
        $id = auth()->user()->id;
        return view('perfil.doacoes',compact('id'));
    }

    public function editar($id) {
        $id = auth()->user()->id;
        return view('perfil.editar',compact('id'));
    }

    public function sair($id) {
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

    //->select('column')->from('table')->where('where clause')->get();
    
}
