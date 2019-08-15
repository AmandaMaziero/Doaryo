<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{

    protected $fillable = [
        'nome', 'imagem', 'quantidade', 'descricao', 'idCategoria', 'idUser',
    ];

    public function listar(){
        return(object) [
            "nome"=>nome;
            "imagem"=>imagem;
            "quantidade"=>quantidade;
            "descricao"=>descricao;
        ]
    }
}
