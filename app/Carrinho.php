<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table = 'carrinho';
    public $timestamps = false;
    protected $fillable = [
        'idCarrinho', 'idRequisicao', 'id',];
    protected $primaryKey = 'idCarrinho';
    protected $guarded = ['idRequisicao', 'id', 'idCarrinho'];

}