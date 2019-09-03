<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    protected $table = 'Requisicoes';
    public $timestamps = false;
    protected $fillable = [
        'nome', 'imagem', 'descricao', 'categoria', 'id', 'status'];
    protected $primaryKey = 'idRequisicao';
    protected $guarded = ['idRequisicao, id'];

}
