<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';

    protected $fillable = [
        'data_venda', 'cliente_id', 'vendedor_id', 
        'pagamento_id', 'promocao_id', 'total_valor', 'total_produtos', 'total_descontos', 'total_acrescimos', 'cancelado'
    ];

    public function Cliente(){
        return $this->hasOne(Categoria::class, 'id', 'cliente_id');
    }

    public function Vendedor(){
        return $this->hasOne(Marca::class, 'id', 'vendedor_id');
    }

    public function Pagamento(){
        return $this->hasOne(Pagemento::class, 'id', 'pagamento_id');
    }

    public function Promocao(){
        return $this->hasOne(Promocao::class, 'id', 'promocao_id');
    }
}
