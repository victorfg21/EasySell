<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstoqueMovimentacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque__movimentacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estoque')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('estoques');

            $table->integer('id_produto')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('produtos');

            $table->decimal('qtd_entrada', 20, 2)->nullable($value = true);;
            $table->decimal('qtd_saida', 20, 2)->nullable($value = true);;
            $table->decimal('valor_unitario', 20, 2);
            $table->decimal('valor_total', 20, 2);
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
        Schema::dropIfExists('estoque__movimentacoes');
    }
}
