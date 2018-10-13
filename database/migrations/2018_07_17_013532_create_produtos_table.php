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
            $table->foreign('id_categoria')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('categorias');

            $table->integer('id_marca')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('marcas');

            $table->integer('id_modelo')
            ->unsigned()
            ->nullable()
            ->references('id')
            ->on('modelos');

            $table->integer('id_foto')->unsigned()
            ->nullable($value = true)
            ->references('id')
            ->on('fotos');

            $table->decimal('peso', 20, 2)->nullable($value = true);
            $table->date('data_cadastro');
            $table->decimal('valor', 20, 2)->default(0.00);
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
        Schema::dropIfExists('produtos');
    }
}
