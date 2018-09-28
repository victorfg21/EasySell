<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $fillable = [
        'nome', 'rg', 'cpf', 'cnpj', 'nascimento', 'email',
        'telefone', 'celular', 'numero', 'endereco',
        'logradouro', 'bairro', 'cidade', 'estado', 'cep'
    ];
}
