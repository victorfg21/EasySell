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
            $table->decimal('quantidade', 20, 2)->default(0.00);
            $table->decimal('valor_linha', 20, 2)->default(0.00);
            $table->decimal('valor_unitario', 20, 2)->default(0.00);
            $table->unsignedInteger('venda_id');
            $table->unsignedInteger('produto_id');
            $table->unsignedInteger('promocao_id')->nullable();

            $table->timestamps();

            $table->foreign('venda_id')->references('id')->on('vendas');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('promocao_id')->references('id')->on('promocoes');
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
