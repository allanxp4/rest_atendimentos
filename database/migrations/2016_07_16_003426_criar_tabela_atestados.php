<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAtestados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atestados', function(Blueprint $table){
            $table->increments('id');
            $table->integer('funcionario_id');
            $table->date('data_atestado');
            //ATENÇÃO: A identificação tem que ser colocada no front-end
            $table->string('nome_medico');
            $table->string('crm');
            $table->string('cid_id');
            $table->date('data_inicial');
            $table->time('hora_inicial');
            $table->date('data_final');
            $table->time('hora_final');
            $table->text('observacoes')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('atestados');
    }
}
