<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilControlador extends Controller
{
    public function index() {
        return view('perfil.admin');
    }

    public function editar() {
        return view('perfil.editar');
    }

    public function deletar() {
        return view('perfil.doador');
    }
    
}
