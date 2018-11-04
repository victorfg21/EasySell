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

    public function Venda(){
        return $this->hasOne(Categoria::class, 'id', 'venda_id');
    }

    public function Produto(){
        return $this->hasOne(Marca::class, 'id', 'produto_id');
    }

    public function Promocao(){
        return $this->hasOne(Modelo::class, 'id', 'promocao_id');
    }
}
