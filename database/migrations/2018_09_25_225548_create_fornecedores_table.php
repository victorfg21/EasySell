<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->string('rg', 20)->nullable($value = true);
            $table->string('cpf', 11)->nullable($value = true);
            $table->string('cnpj', 14);
            $table->date('nascimento')->nullable($value = true);
            $table->string('email', 200);
            $table->string('telefone', 10);
            $table->string('celular', 11)->nullable($value = true);
            $table->integer('numero');
            $table->string('endereco', 150);
            $table->string('logradouro', 100);
            $table->string('bairro', 150);
            $table->string('cidade', 150);
            $table->string('estado', 2);
            $table->string('cep', 8);
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
        Schema::dropIfExists('fornecedores');
    }
}
