<?php

use Illuminate\Database\Seeder;
use App\Condicao;

class CondicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "À Vista",
            'vista' => "Y",
            'qtd_parcelas' => "0",
        ];
        
        if (Condicao::where('descricao', '=', $dados['descricao'])->count()) {
            $condicao = Condicao::where('descricao', '=', $dados['descricao'])->first();
            $condicao->update($dados);
        } else {
            Condicao::create($dados);
        }

        $dados = [
            'descricao' => "Até 3x",
            'vista' => "N",
            'qtd_parcelas' => "3",
        ];
        
        if (Condicao::where('descricao', '=', $dados['descricao'])->count()) {
            $condicao = Condicao::where('descricao', '=', $dados['descricao'])->first();
            $condicao->update($dados);
        } else {
            Condicao::create($dados);
        }

        $dados = [
            'descricao' => "Até 12x",
            'vista' => "N",
            'qtd_parcelas' => "12",
        ];
        
        if (Condicao::where('descricao', '=', $dados['descricao'])->count()) {
            $condicao = Condicao::where('descricao', '=', $dados['descricao'])->first();
            $condicao->update($dados);
        } else {
            Condicao::create($dados);
        }
    }
}
