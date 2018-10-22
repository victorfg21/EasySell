<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 150);
            $table->decimal('desconto', 10, 2)->default(0.00);
            $table->decimal('acrescimo', 10, 2)->default(0.00);
            $table->unsignedInteger('condicao_id');

            $table->timestamps();

            $table->foreign('condicao_id')->references('id')->on('condicoes');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
}
