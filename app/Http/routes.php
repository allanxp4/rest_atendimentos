<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/auth', 'AuthController@authenticate');

//Rotas da busca de CID
Route::get('/cid', 'CidController@getTodosCid');
Route::get('/cid/{cid}', 'CidController@getCidById');
Route::get('/cid/procurar/{termo}', 'CidController@procuraCid');

//Rotas do atendimento
Route::get('/atendimento', 'AtendimentoController@getTodosAtendimentos');
Route::get('/atendimento/{id}', 'AtendimentoController@buscaAtendimentoPorId');
Route::get('/atendimento/data/{data}', 'AtendimentoController@buscaAtendimentoPorData');
Route::post('/atendimento', 'AtendimentoController@novoAtendimento');
Route::put('/atendimento', 'AtendimentoController@atualizaAtendimento');
Route::delete('/atendimento/{id}', 'AtendimentoController@excluiAtendimento');
Route::get('/test', 'AtendimentoController@getAuthenticatedUser');
//Rotas do atestado
Route::get('/atestado', 'AtestadoController@todosAtestados');
Route::get('/atestado/{id}', 'AtestadoController@buscaAtestadoPorId');
//Route::get('/atestado/busca/{termo}', 'AtestadoController@buscaAtestadoPorTermo');
Route::post('/atestado', 'AtestadoController@novoAtestado');
Route::put('/atestado', 'AtestadoController@atualizaAtestado');

//Rotas do funcionario
Route::get('/funcionario', 'FuncionarioController@buscaTodosFuncionarios');
Route::get('/funcionario/{id}', 'FuncionarioController@buscaFuncionarioPorId');
Route::post('/funcionario', 'FuncionarioController@novoFuncionario');
Route::put('/funcionario', 'FuncionarioController@atualizaFuncionario');
Route::delete('/funcionario/{id}', 'FuncionarioController@excluiFuncionario');