<?php

use Illuminate\Database\Seeder;
use App\Pagamento;

class PagamentoSeeder extends Seeder
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
            'desconto' => 15,
            'acrescimo' => 0,
            'condicao_id' => 1,
        ];
        
        if (Pagamento::where('descricao', '=', $dados['descricao'])->count()) {
            $pagamento = Pagamento::where('descricao', '=', $dados['descricao'])->first();
            $pagamento->update($dados);
        } else {
            Pagamento::create($dados);
        }

        $dados = [
            'descricao' => "Débito Á Vista",
            'desconto' => 10,
            'acrescimo' => 0,
            'condicao_id' => 1,
        ];

        if (Pagamento::where('descricao', '=', $dados['descricao'])->count()) {
            $pagamento = Pagamento::where('descricao', '=', $dados['descricao'])->first();
            $pagamento->update($dados);
        } else {
            Pagamento::create($dados);
        }

        $dados = [
            'descricao' => "Dinheiro Parcelado",
            'desconto' => 0,
            'acrescimo' => 2,
            'condicao_id' => 2,
        ];

        if (Pagamento::where('descricao', '=', $dados['descricao'])->count()) {
            $pagamento = Pagamento::where('descricao', '=', $dados['descricao'])->first();
            $pagamento->update($dados);
        } else {
            Pagamento::create($dados);
        }

        $dados = [
            'descricao' => "Crédito Parcelado",
            'desconto' => 0,
            'acrescimo' => 3.5,
            'condicao_id' => 3,
        ];
        
        if (Pagamento::where('descricao', '=', $dados['descricao'])->count()) {
            $pagamento = Pagamento::where('descricao', '=', $dados['descricao'])->first();
            $pagamento->update($dados);
        } else {
            Pagamento::create($dados);
        }
    }
}
