<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = ['date', 'time', 'pressao', 'pulso', 'temperatura', 'queixa', 'conduta',
    'funcionario_id'];

    public function funcionario(){
        return $this->belongsTo('App\Funcionario');
    }
}
