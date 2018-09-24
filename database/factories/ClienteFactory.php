<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->nome,
        'rg' => $faker->rg,
        'cpf' => $faker->cpf,
        'nascimento' => $faker->nascimento,
        'email' => $faker->email,
        'telefone' => $faker->telefone,
        'celular' => $faker->celular,
        'numero' => $faker->numero,
        'endereco' => $faker->endereco,
        'logradouro' => $faker->logradouro,
        'bairro' => $faker->bairro,
        'cidade' => $faker->cidade,
        'estado' => $faker->estado,
        'cep' => $faker->cep,
    ];
});
