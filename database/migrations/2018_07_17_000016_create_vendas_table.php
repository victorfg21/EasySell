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
            $table->decimal('total_valor', 20, 2)->default(0.00);
            $table->decimal('total_produtos', 20, 2)->default(0.00);
            $table->decimal('total_descontos', 20, 2)->default(0.00);
            $table->decimal('total_acrescimos', 20, 2)->default(0.00);
            $table->boolean('cancelado');
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('vendedor_id');
            $table->unsignedInteger('pagamento_id');

            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('vendedor_id')->references('id')->on('vendedores');
            $table->foreign('pagamento_id')->references('id')->on('pagamentos');

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
