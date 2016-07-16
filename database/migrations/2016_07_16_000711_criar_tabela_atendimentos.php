<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAtendimentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function(Blueprint $table){
            $table->increments('id');
            $table->string('funcionario_id');
            $table->string('identificacao');
            $table->dateTime('data_hora');
            $table->string('pressao');
            $table->string('pulso');
            $table->string('temperatura');
            $table->text('queixa');
            $table->text('conduta');
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
        Schema::drop('atendimentos');
    }
}