<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Funcionario extends Model
{
   
    protected $fillable = ['nome', 'identificacao'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function atendimento(){
        return $this->hasMany('App\Atendimento');
    }

    public function atestado(){
        return $this->hasMany('App\Atestado');
    }
}
