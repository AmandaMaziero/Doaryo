<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    protected $table = 'doacao';
    public $timestamps = false;
    protected $fillable = [
        'idDoacao', 'dataDoacao', 'idDoador'];
    protected $primaryKey = 'idDoacao';
    protected $guarded = ['idDoacao','idDoador'];
}

?>