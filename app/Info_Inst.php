<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_Inst extends Model
{
    protected $table = 'info_inst';
    public $timestamps = false;
    protected $fillable = [
        'idInfo', 'localizacao', 'fundacao', 'acaosocial', 'idInst'];
    protected $primaryKey = 'idInfo';
    protected $guarded = ['idInfo','idInst'];
}
