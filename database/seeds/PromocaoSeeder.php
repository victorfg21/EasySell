<?php

use Illuminate\Database\Seeder;
use App\Promocao;

class PromocaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Dinheiro Á Vista",
            'inicio' => '20181101',
            'fim' => '20181130',
            'pagamento_id' => 1,
            'categoria_id' => '',
            'marca_id' => '',
            'modelo_id' => '',
        ];
        
        if (Promocao::where('descricao', '=', $dados['descricao'])->count()) {
            $Promocao = Promocao::where('descricao', '=', $dados['descricao'])->first();
            $Promocao->update($dados);
        } else {
            Promocao::create($dados);
        }        
    }
}
