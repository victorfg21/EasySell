<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque_Movimentacao extends Model
{
    protected $table = 'estoque_movimentacoes';

    protected $fillable = [
        'estoque_id', 'produto_id', 'qtd_entrada', 
        'qtd_saida', 'valor_unitario', 'valor_total'
    ];
}
