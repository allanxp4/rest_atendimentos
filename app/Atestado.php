<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestado extends Model
{
    protected $fillable = ['funcionario_id', 'data_atestado', 'nome_medico', 'crm', 'cid_id',
        'data_inicial', 'data_final', 'observacoes'];

    
    function funcionario(){


        return $this->belongsTo('funcionario');
    }
}
