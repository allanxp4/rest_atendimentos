<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

    protected $fillable = ['nome_empresa', 'cnpj'];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function funcionario(){
        return $this->hasMany('App\Funcionario');
    }
}
