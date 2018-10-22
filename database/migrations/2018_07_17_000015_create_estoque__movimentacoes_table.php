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
            $table->decimal('qtd_entrada', 20, 2)->nullable();
            $table->decimal('qtd_saida', 20, 2)->nullable();
            $table->decimal('valor_unitario', 20, 2)->default(0.00);
            $table->decimal('valor_total', 20, 2)->default(0.00);
            $table->unsignedInteger('estoque_id');
            $table->unsignedInteger('produto_id');

            $table->timestamps();

            $table->foreign('estoque_id')->references('id')->on('estoques');
            $table->foreign('produto_id')->references('id')->on('produtos');
            
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
