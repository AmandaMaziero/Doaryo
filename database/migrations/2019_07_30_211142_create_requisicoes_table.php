<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requisicoes', function (Blueprint $table) {
            $table->increments('idRequisicao');
            $table->string('Nome');
            $table->string('Imagem');
            $table->string('Descricao');
            $table->string('Categoria');
            $table->string('Status');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('requisicoes');
    }
}
