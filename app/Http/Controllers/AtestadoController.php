<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Atestado;
use App\Funcionario;

class AtestadoController extends Controller
{
    public function todosAtestados(){
        return Atestado::with('funcionario')->get();
    }
    
    public function novoAtestado(Request $request){
        $funcionario = Funcionario::find($request->input('funcionario_id'));
        $atestado = new Atestado($request->all());

        $funcionario->atestado()->save($atestado);
        return response('', 204);

    }

    public function buscaAtestadoPorId($id){
        return Atestado::find($id);
    }

    //TODO: outros métodos de busca

    public function editaAtestado(Request $request){
        $atestado = Atestado::find($request->input('id'));
        $atestado->fill($request->all())->save();

        return response('', 204);
    }

    public function apagaAtestado(Request $request){
        Atestado::destroy($request->input('id'));
    }
}
