<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrinhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinho', function (Blueprint $table) {
            $table->increments('idCarrinho');
            $table->integer('idRequisicao')->unsigned();
            $table->integer('idUser')->unsigned();
            $table->foreign('idRequisicao')->references('idRequisicao')->on('requisicoes');
            $table->foreign('idUser')->references('idUser')->on('users');
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
        Schema::dropIfExists('carrinho');
    }
}
