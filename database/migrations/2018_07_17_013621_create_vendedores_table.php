<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('rg', 20);
            $table->string('cpf', 11);
            $table->string('cnpj', 14)->nullable($value = true);
            $table->date('nascimento');
            $table->string('email', 200)->nullable($value = true);
            $table->string('telefone', 10)->nullable($value = true);
            $table->string('celular', 11);
            $table->integer('numero');
            $table->string('endereco', 150);
            $table->string('logradouro', 100);
            $table->string('bairro', 150);
            $table->string('cidade', 150);
            $table->string('estado', 2);
            $table->string('cep', 8)->nullable($value = true);
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
        Schema::dropIfExists('vendedores');
    }
}