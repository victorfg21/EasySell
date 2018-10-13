<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda_linhas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venda')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('vendas');

            $table->integer('id_produto')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('produtos');

            $table->integer('id_promocao')
            ->unsigned()
            ->nullable($value = true)
            ->references('id')
            ->on('promocoes');

            $table->decimal('quantidade', 20, 2);
            $table->decimal('valor_linha', 20, 2);
            $table->decimal('valor_unitario', 20, 2);
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
        Schema::dropIfExists('venda_linhas');
    }
}
