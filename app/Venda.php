<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';

    protected $fillable = [
        'data_venda', 'cliente_id', 'vendedor_id', 
        'pagamento_id', 'total_valor', 'total_produtos'
    ];
}
