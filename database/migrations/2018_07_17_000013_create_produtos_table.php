<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 150);
            $table->decimal('peso', 20, 2)->nullable();
            $table->date('data_cadastro');
            $table->decimal('valor', 20, 2)->default(0.00);
            $table->unsignedInteger('fornecedor_id');
            $table->unsignedInteger('categoria_id');
            $table->unsignedInteger('marca_id');
            $table->unsignedInteger('modelo_id');
            $table->unsignedInteger('foto_id')->nullable();

            $table->timestamps();

            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('modelo_id')->references('id')->on('modelos');        
            $table->foreign('foto_id')->references('id')->on('fotos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
