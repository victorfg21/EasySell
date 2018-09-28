<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'titulo, descricao, data_evento, id_foto'
    ];
}
