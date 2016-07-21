<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use App\Atendimento;
use App\Funcionario;
use Illuminate\Database\Query\Builder;
use Auth;

class AtendimentoController extends Controller
{
    /*TODO: Ativar antes de colocar em público
    public function __construct(Request $request)
    {
        $this->middleware('jwt.auth');
    }*/


    public function getTodosAtendimentos(){
        $atendimentos = Atendimento::with('funcionario')->get();
        return $atendimentos;

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
    
    public function excluiAtendimento($id){
        Atendimento::destroy($id);
        return Response('', 204);
    }

}


