<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    
    protected $fillable = ['nome', 'identificacao', 'empresa_id'];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function atendimento(){
        return $this->hasMany('App\Atendimento');
    }
}
