<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamentos';

    protected $fillable = [
        'descricao', 'condicao_id', 'desconto', 
        'acrescimo'
    ];
}
