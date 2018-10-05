<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'nome', 'rg', 'cpf', 'cnpj', 'nascimento', 'email',
        'telefone', 'celular', 'numero', 'endereco',
        'bairro', 'cidade', 'estado', 'cep'
    ];
}
