<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = [
        'nome', 'rg', 'cpf', 'cnpj', 'nascimento', 'email',
        'telefone', 'celular', 'numero', 'endereco',
        'logradouro', 'bairro', 'cidade', 'estado', 'cep'
    ];
}
