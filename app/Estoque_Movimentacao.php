<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque_Movimentacao extends Model
{
    protected $table = 'estoque_movimentacoes';

    protected $fillable = [
        'id_estoque', 'id_produto', 'qtd_entrada', 
        'qtd_saida', 'valor_unitario', 'valor_total'
    ];
}
