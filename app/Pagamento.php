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

    public function Condicao(){
        return $this->hasOne(Fornecedor::class, 'id', 'condicao_id');
    }
}
