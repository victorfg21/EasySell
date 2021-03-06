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
            $table->decimal('desconto', 20, 2)->default(0.00);
            $table->unsignedInteger('pagamento_id')->nullable();
            $table->unsignedInteger('categoria_id')->nullable();
            $table->unsignedInteger('marca_id')->nullable();
            $table->unsignedInteger('modelo_id')->nullable();

            $table->timestamps();

            $table->foreign('pagamento_id')->references('id')->on('pagamentos');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('modelo_id')->references('id')->on('modelos');        
            
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
