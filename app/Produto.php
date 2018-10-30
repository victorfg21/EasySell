<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'descricao', 'categoria_id', 'marca_id', 'modelo_id', 'foto_id', 'peso', 
        'data_cadastro', 'valor'
    ];

    public function Categoria(){
        return $this->hasOne(Categoria::class, 'categoria_id', 'id');
    }

    public function Marca(){
        return $this->hasOne(Marca::class, 'marca_id', 'id');
    }

    public function Modelo(){
        return $this->hasOne(Modelo::class, 'modelo_id', 'id');
    }
    
    public function Foto(){
        return $this->hasOne(Foto::class, 'foto_id', 'id');
    }
}
