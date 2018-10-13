<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'descricao', 'id_categoria', 'id_marca', 'id_modelo', 'id_foto', 'peso', 
        'data_cadastro', 'valor'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
