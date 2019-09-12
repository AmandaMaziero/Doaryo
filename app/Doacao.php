<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    protected $table = 'doacao';
    public $timestamps = false;
    protected $fillable = [
        'idDoacao', 'idRequisicao', 'dataDoacao', 'idDoador', 'idInst'];
    protected $primaryKey = 'idDoacao';
    protected $guarded = ['idDoacao','idRequisicao', 'idDoador','idInst'];
}

?>