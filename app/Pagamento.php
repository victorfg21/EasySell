<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamentos';

    protected $fillable = [
        'descricao', 'id_condicao', 'desconto', 
        'acrescimo'
    ];
}
