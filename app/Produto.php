<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'descricao', 'fornecedor_id', 'categoria_id', 'marca_id', 'modelo_id', 'foto_id', 'peso', 
        'data_cadastro', 'valor', 'codigo_barra'
    ];

    public function Fornecedor(){
        return $this->hasOne(Fornecedor::class, 'id', 'fornecedor_id');
    }

    public function Categoria(){
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function Marca(){
        return $this->hasOne(Marca::class, 'id', 'marca_id');
    }

    public function Modelo(){
        return $this->hasOne(Modelo::class, 'id', 'modelo_id');
    }
    
    public function Foto(){
        return $this->hasOne(Foto::class, 'id', 'foto_id');
    }
}
