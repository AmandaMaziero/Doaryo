<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->increments('idDoacao');
            $table->string('Produto');
            $table->string('DataDoacao');
            $table->integer('idInstituicao')->unsigned();
            $table->integer('idDoador')->unsigned();
            $table->foreign('idInstituicao')->references('idInstituicao')->on('instituicao');
            $table->foreign('idDoador')->references('idDoador')->on('doador');
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
        Schema::dropIfExists('doacao');
    }
}