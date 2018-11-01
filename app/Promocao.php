<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $table = 'promocoes';

    protected $fillable = [
        'descricao', 'inicio', 'fim', 'desconto', 
        'categoria_id', 'marca_id', 'modelo_id'
    ];

    public function Categoria(){
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function Marca(){
        return $this->hasOne(Marca::class, 'id', 'marca_id');
    }

    public function Modelo(){
        return $this->hasOne(Modelo::class, 'id', 'modelo_id');
    }
}
