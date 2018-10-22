<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('data_venda');
            $table->integer('id_cliente')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('clientes');

            $table->integer('id_vendedor')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('vendedores');

            $table->integer('id_pagamento')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('pagamentos');

            $table->decimal('total_valor', 20, 2);
            $table->decimal('total_produtos', 20, 2);
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
        Schema::dropIfExists('vendas');
    }
}
