<?php

use Faker\Generator as Faker;

$factory->define(App\Pagamento::class, function (Faker $faker) {
    return [
        'descricao' => $faker->descricao,
        'inicio' => $faker->inicio,
        'fim' => $faker->fim,
        'pagamento_id' => $faker->pagamento_id,
        'categoria_id' => $faker->categoria_id,
        'marca_id' => $faker->marca_id,
        'modelo_id' => $faker->modelo_id,
    ];
});
