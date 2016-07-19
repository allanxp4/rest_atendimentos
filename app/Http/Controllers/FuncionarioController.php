<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Funcionario;
use App\Atestado;
use App\Atendimento;

//classe para acesso aos funcionarios e seus relacionamentos.
class FuncionarioController extends Controller
{
    //funções CRUD dos funcionarios.
    public function novoFuncionario(Request $request){
        Funcionario::create($request->all());
        return response('', 204);
    }

    public function buscaFuncionarioPorId($id){
        return Funcionario::find($id);
    }

    public function buscaTodosFuncionarios(){
        return Funcionario::all();
    }

    public function buscaFuncionarioPorNome($nome){
        //TODO: implementar a busca de funcionários por nome
    }

    public function atualizaFuncionario(Request $request){
        $funcionario = Funcionario::find($request->input('id'));
        $funcionario->fill($request->all())->save();

        return response('', 204);
    }

    public function excluiFuncionario($id){
        Funcionario::destroy($id);

        return response('', 204);
    }
    //FIM DO CRUD DE FUNCIONÁRIOSS
}
