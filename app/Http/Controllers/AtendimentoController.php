<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Atendimento;
use App\Funcionario;

class AtendimentoController extends Controller
{
    public function getTodosAtendimentos(){
        return Atendimento::all();
    }

    public function buscaAtendimentoPorId($id){
        $atendimento = Atendimento::find($id);
        $funcionario = Funcionario::find($atendimento->funcionario_id);

        $atendimento->funcionario = $funcionario;
        return $atendimento;

    }
    
    public function buscaAtendimentoPorData($data){
        return Atendimento::where('data', 'like', "%$data%");

    }

    public function novoAtendimento(Request $request){
        $atendimento = new Atendimento($request->all());
        $funcionario = new Funcionario($request->input('funcionario'));
        $funcionario->save();

        $atendimento->funcionario_id = $funcionario->id;
        $atendimento->save();

        return response('', 204);
    }

    public function atualizaAtendimento(Request $request){
        $funcionario = Funcionario::find($request->funcionario_id);
        $atendimento = Atendimento::find($request->id);

        $funcionario->nome = $request->input('funcionario.nome');
        $funcionario->identificacao = $request->input('funcionario.identificacao');
        $funcionario->save();

        $atendimento->data = $request->input('data');
        $atendimento->pressao = $request->input('pressao');
        $atendimento->pulso = $request->input('pulso');
        $atendimento->temperatura = $request->input('temperatura');
        $atendimento->queixa = $request->input('queixa');
        $atendimento->conduta = $request->input('conduta');
        $atendimento->save();

        return response('', 204);


    }
}


