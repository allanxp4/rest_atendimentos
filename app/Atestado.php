<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestado extends Model
{
    //TODO: checar se os IDs realmente precisam ser fiilable
    protected $fillable = ['data_atestado', 'nome_medico', 'crm', 'cid_id',
        'data_inicial', 'data_final', 'observacoes'];

    
    function funcionario(){


        return $this->belongsTo('funcionario');
    }
}
