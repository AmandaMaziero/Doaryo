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
            $table->bigIncrements('idRequisicao');
            $table->string('Nome');
            $table->string('Quantidade');
            $table->string('Imagem');
            $table->string('Descricao');
            $table->string('idCategoria');
            $table->string('idInstituicao');
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
