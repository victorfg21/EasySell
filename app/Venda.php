<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';

    protected $fillable = [
        'data_venda', 'id_cliente', 'id_vendedor', 
        'id_pagamento', 'total_valor', 'total_produtos'
    ];
}
