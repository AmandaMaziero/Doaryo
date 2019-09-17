<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemDoado extends Model
{
    protected $table = 'itemDoado';
    public $timestamps = false;
    protected $fillable = [
        'idItem','idDoacao', 'idDoador', 'idRequisicao', 'idInst'];
    protected $primaryKey = 'idItem';
    protected $guarded = ['idItem','idDoacao','idRequisicao', 'idDoador','idInst'];
}
