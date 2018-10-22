<?php

use Faker\Generator as Faker;

$factory->define(App\Pagamento::class, function (Faker $faker) {
    return [
        'descricao' => $faker->descricao,
        'desconto' => $faker->desconto,
        'acrescimo' => $faker->acrescimo,
        'condicao_id' => $faker->condicao_id,
    ];
});
