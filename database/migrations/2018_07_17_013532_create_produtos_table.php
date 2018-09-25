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
            $table->integer('id_catalogo')->nullable($value = true);
            $table->integer('id_categoria');
            $table->integer('id_marca');
            $table->integer('id_tipo');
            $table->integer('id_modelo');
            $table->integer('id_cor')->nullable($value = true);
            $table->integer('id_foto')->nullable($value = true);
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
