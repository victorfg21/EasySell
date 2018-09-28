<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'descricao', 'id_catalogo', 'id_categoria', 'id_marca', 
        'id_tipo', 'id_modelo', 'id_cor', 'id_foto', 'peso', 
        'data_cadastro', 'valor'
    ];
}
