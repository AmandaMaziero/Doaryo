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
            $table->integer('idProduto')->unsigned();
            $table->integer('idDoador')->unsigned();
            $table->foreign('idProduto')->references('idProduto')->on('Produto');
            $table->foreign('idDoador')->references('idDoador')->on('Doador');
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
