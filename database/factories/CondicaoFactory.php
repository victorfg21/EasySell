<?php

use Faker\Generator as Faker;

$factory->define(App\Condicao::class, function (Faker $faker) {
    return [
        'descricao' => $faker->descricao,
        'vista' => $faker->vista,
        'qtd_parcelas' => $faker->qtd_parcelas,
    ];
});
