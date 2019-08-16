<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    protected $table = 'Requisicoes';
    public $timestamps = false;
    protected $fillable = [
        'nome', 'imagem', 'quantidade', 'descricao', 'categoria', 'id',];
    protected $primaryKey = 'idRequisicao';
    protected $guarded = ['idRequisicao, id'];

}
