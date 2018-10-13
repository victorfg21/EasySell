<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', 150);
            $table->dateTime('inicio');
            $table->dateTime('fim');
            $table->decimal('desconto', 20, 2);
            $table->integer('id_categoria')->nullable($value = false);
            $table->integer('id_marca')->nullable($value = true);
            $table->integer('id_modelo')->nullable($value = true);
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
        Schema::dropIfExists('promocoes');
    }
}
