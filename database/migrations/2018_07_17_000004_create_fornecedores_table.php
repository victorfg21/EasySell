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
            $table->string('cnpj', 14)->nullable($value = true);
            $table->string('numInsc', 14)->nullable($value = true);
            $table->string('email', 200);
            $table->string('telefone', 10)->nullable($value = true);
            $table->string('celular', 11);
            $table->integer('numero');
            $table->string('endereco', 150);
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
