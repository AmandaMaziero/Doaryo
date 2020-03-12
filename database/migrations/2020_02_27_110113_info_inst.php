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
            $table->string('localizacao');
            $table->string('fundacao');
            $table->string('acaosocial');
            $table->string('imagem');
            $table->integer('idInst')->unsigned();
            $table->foreign('idInst')->references('id')->on('users');
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
