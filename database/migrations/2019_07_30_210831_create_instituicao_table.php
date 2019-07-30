<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicao', function (Blueprint $table) {
            $table->bigIncrements('idInstituicao');
            $table->string('Nome');
            $table->string('Email');
            $table->string('Senha');
            $table->string('Telefone');
            $table->string('Endereco');
            $table->string('Numero');
            $table->string('Bairro');
            $table->string('Cep');
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
        Schema::dropIfExists('instituicao');
    }
}
