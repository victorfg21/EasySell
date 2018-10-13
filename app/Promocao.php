<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $table = 'promocoes';

    protected $fillable = [
        'descricao', 'inicio', 'fim', 'desconto', 
        'id_categoria', 'id_marca', 'id_modelo'
    ];
}
