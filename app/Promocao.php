<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $table = 'promocoes';

    protected $fillable = [
        'descricao', 'inicio', 'fim', 'desconto', 
        'categoria_id', 'marca_id', 'modelo_id'
    ];
}
