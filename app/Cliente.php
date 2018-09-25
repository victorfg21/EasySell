<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nome', 'rg', 'cpf', 'nascimento', 'email',
        'telefone', 'celular', 'numero', 'endereco',
        'logradouro', 'bairro', 'cidade', 'estado', 'cep'
    ];
}
