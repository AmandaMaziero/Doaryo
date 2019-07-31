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
        Schema::create('requisicoes', function (Blueprint $table) {
            $table->increments('idRequisicao');
            $table->string('Nome');
            $table->string('Quantidade');
            $table->string('Imagem');
            $table->string('Descricao');
            $table->integer('idCategoria')->unsigned();
            $table->integer('idInstituicao')->unsigned();
            $table->foreign('idCategoria')->references('idCategoria')->on('categoria');
            $table->foreign('idInstituicao')->references('idInstituicao')->on('instituicao');
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