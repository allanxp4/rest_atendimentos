<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Atendimento;
use App\Funcionario;
use Illuminate\Database\Query\Builder;

class AtendimentoController extends Controller
{
    public function getTodosAtendimentos(){
        return Atendimento::all();
    }

    public function buscaAtendimentoPorId($id){
        $atendimento = Atendimento::find($id);
        return $atendimento;

    }
    
    public function buscaAtendimentoPorData($data){
        return Atendimento::where('data', 'like', "%$data%");

    }

    public function novoAtendimento(Request $request){

        $funcionario = Funcionario::find($request->input('funcionario_id'));
        $atendimento = new Atendimento($request->all());
        $funcionario->atendimento()->save($atendimento);

        return response('', 204);


    }

    public function atualizaAtendimento(Request $request){

        $atendimento = Atendimento::find($request->input('id'));
        $atendimento->fill($request->all())->save();

        return response('', 204);


    }
}


