<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Atestado;
use App\Funcionario;

class AtestadoController extends Controller
{
    public function todosAtestados(){
        return Atestado::all();
    }
}
