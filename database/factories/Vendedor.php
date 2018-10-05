<?php

use Faker\Generator as Faker;

$factory->define(App\Vendedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->nome,
        'rg' => $faker->rg,
        'cpf' => $faker->cpf,
        'cnpj' => $faker->cnpj,
        'nascimento' => $faker->nascimento,
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