<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemDoado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemDoado', function (Blueprint $table) {
            $table->increments('idItem');
            $table->integer('idDoacao')->unsigned();
            $table->integer('idDoador')->unsigned();
            $table->integer('idRequisicao')->unsigned();
            $table->integer('idInst')->unsigned();
            $table->foreign('idDoacao')->references('idDoacao')->on('doacao');
            $table->foreign('idDoador')->references('id')->on('users');
            $table->foreign('idRequisicao')->references('idRequisicao')->on('Requisicoes');
            $table->foreign('idInst')->references('id')->on('Requisicoes');
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
        Schema::dropIfExists('itemDoado');
    }
}
