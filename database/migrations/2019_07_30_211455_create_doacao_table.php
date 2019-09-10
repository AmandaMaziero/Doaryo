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
            $table->date('DataDoacao');
            $table->integer('idDoador')->unsigned();
            $table->integer('idInst')->unsigned();
            $table->foreign('idDoador')->references('id')->on('users');
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
        Schema::dropIfExists('doacao');
    }
}
