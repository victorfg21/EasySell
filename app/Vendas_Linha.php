<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda_Linha extends Model
{
    protected $table = 'venda_linhas';

    protected $fillable = [
        'id_venda', 'id_produto', 'id_promocao', 
        'quantidade', 'valor_linha', 'valor_unitario'
    ];
}
