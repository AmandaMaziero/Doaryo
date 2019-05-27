<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoControlador extends Controller
{
    public function index() {
        return view('carrinho.index');
    }
}
