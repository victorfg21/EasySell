<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'fotos';

    protected $fillable = [
        'tipo_conteudo', 'descricao', 'extensao', 
        'tamanho', 'imagem'
    ];
}
