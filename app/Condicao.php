<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicao extends Model
{
    protected $table = 'condicoes';

    protected $fillable = [
        'descricao', 'vista', 'qtd_parcelas'
    ];
}
