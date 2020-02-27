<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoInst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_inst', function (Blueprint $table) {
            $table->increments('idInfo');
            $table->increments('localizacao');
            $table->increments('fundacao');
            $table->increments('acaosocial');
            $table->integer('idInst')->unsigned();
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
        Schema::dropIfExists('info_inst');
    }
}
