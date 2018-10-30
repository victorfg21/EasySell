<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda_Linha extends Model
{
    protected $table = 'venda_linhas';

    protected $fillable = [
        'venda_id', 'produto_id', 'promocao_id',
        'quantidade', 'valor_linha', 'valor_unitario'
    ];
}
