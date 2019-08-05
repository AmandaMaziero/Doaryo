<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doador', function (Blueprint $table) {
            $table->increments('idDoador');
            $table->string('Nome');
            $table->string('Email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Senha');
            $table->string('Celular');
            $table->string('Cpf');
            $table->string('Cep');
            $table->date('DataNasc');
            $table->rememberToken();
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
        Schema::dropIfExists('Doador');
    }
}
