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

//Rotas da busca de CID
Route::get('/api/cid', 'CidController@getTodosCid');
Route::get('/api/cid/{cid}', 'CidController@getCidById');
Route::get('/api/cid/procurar/{termo}', 'CidController@procuraCid');

//Rotas do atendimento
Route::get('/api/atendimento', 'AtendimentoController@getTodosAtendimentos');
Route::get('/api/atendimento/{id}', 'AtendimentoController@buscaAtendimentoPorId');
Route::get('/api/atendimento/data/{data}', 'AtendimentoController@buscaAtendimentoPorData');
Route::post('/api/atendimento', 'AtendimentoController@novoAtendimento');
Route::put('/api/atendimento', 'AtendimentoController@atualizaAtendimento');

//Rotas do atestado
Route::get('/api/atestado', 'AtestadoController@todosAtestados');
Route::get('/api/atestado/{id}', 'AtestadoController@buscaAtestadoPorId');
//Route::get('/api/atestado/busca/{termo}', 'AtestadoController@buscaAtestadoPorTermo');
Route::post('/api/atestado', 'AtestadoController@novoAtestado');
Route::put('/api/atestado', 'AtestadoController@atualizaAtestado');
