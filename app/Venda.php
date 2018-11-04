<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';

    protected $fillable = [
        'data_venda', 'cliente_id', 'vendedor_id', 
        'pagamento_id', 'total_valor', 'total_produtos', 'cancelado'
    ];

    public function Cliente(){
        return $this->hasOne(Categoria::class, 'id', 'cliente_id');
    }

    public function Vendedor(){
        return $this->hasOne(Marca::class, 'id', 'vendedor_id');
    }

    public function Pagamento(){
        return $this->hasOne(Modelo::class, 'id', 'pagamento_id');
    }
}
