<?php

use Faker\Generator as Faker;

$factory->define(App\Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->nome,
        'cnpj' => $faker->cnpj,
        'email' => $faker->email,
        'telefone' => $faker->telefone,
        'celular' => $faker->celular,
        'numero' => $faker->numero,
        'endereco' => $faker->endereco,
        'bairro' => $faker->bairro,
        'cidade' => $faker->cidade,
        'estado' => $faker->estado,
        'cep' => $faker->cep,
    ];
});