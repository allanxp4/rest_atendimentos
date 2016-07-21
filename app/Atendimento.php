<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = ['data_hora', 'pressao', 'pulso', 'temperatura', 'queixa', 'conduta'];
    
    public function funcionario(){
        return $this->belongsTo('App\Funcionario');
    }
}
