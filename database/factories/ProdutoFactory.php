<?php

use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker) {
    return [
        'descricao' => $faker->descricao,
        'data_cadastro' => $faker->data_cadastro,
        'valor' => $faker->valor,
        'fornecedor_id' => $faker->fornecedor_id,
        'categoria_id' => $faker->categoria_id,
        'marca_id' => $faker->marca_id,
        'modelo_id' => $faker->modelo_id,
        'codigo_barra' => $faker->codigo_barra,
    ];
});
