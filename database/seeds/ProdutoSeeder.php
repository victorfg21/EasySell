<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Calcinha XY Rosa",
            'data_cadastro' => "20181022",
            'valor' => 11.5,
            'fornecedor_id' => 1,
            'categoria_id' => 2,
            'marca_id' => 1,
            'modelo_id' => 2,
            'codigo_barra' => "0000000001",
        ];
        
        if (Produto::where('descricao', '=', $dados['descricao'])->count()) {
            $produto = Produto::where('descricao', '=', $dados['descricao'])->first();
            $produto->update($dados);
        } else {
            Produto::create($dados);
        }

        $dados = [
            'descricao' => "Sutiã XX",
            'data_cadastro' => "20181022",
            'valor' => 18.5,
            'fornecedor_id' => 1,
            'categoria_id' => 2,
            'marca_id' => 1,
            'modelo_id' => 3,
            'codigo_barra' => "0000000002",
        ];
        
        if (Produto::where('descricao', '=', $dados['descricao'])->count()) {
            $produto = Produto::where('descricao', '=', $dados['descricao'])->first();
            $produto->update($dados);
        } else {
            Produto::create($dados);
        }

        $dados = [
            'descricao' => "Conjunto Lingerie DS",
            'data_cadastro' => "20181022",
            'valor' => 85,
            'fornecedor_id' => 1,
            'categoria_id' => 2,
            'marca_id' => 2,
            'modelo_id' => 6,
            'codigo_barra' => "0000000003",
        ];
        
        if (Produto::where('descricao', '=', $dados['descricao'])->count()) {
            $produto = Produto::where('descricao', '=', $dados['descricao'])->first();
            $produto->update($dados);
        } else {
            Produto::create($dados);
        }

        $dados = [
            'descricao' => "Leg Style XP",
            'data_cadastro' => "20181022",
            'valor' => 50.68,
            'fornecedor_id' => 2,
            'categoria_id' => 1,
            'marca_id' => 2,
            'modelo_id' => 5,
            'codigo_barra' => "0000000004",
        ];
        
        if (Produto::where('descricao', '=', $dados['descricao'])->count()) {
            $produto = Produto::where('descricao', '=', $dados['descricao'])->first();
            $produto->update($dados);
        } else {
            Produto::create($dados);
        }

        $dados = [
            'descricao' => "Top Super Maneiro XG",
            'data_cadastro' => "20181022",
            'valor' => 35.4,
            'fornecedor_id' => 2,
            'categoria_id' => 1,
            'marca_id' => 2,
            'modelo_id' => 4,
            'codigo_barra' => "0000000005",
        ];
        
        if (Produto::where('descricao', '=', $dados['descricao'])->count()) {
            $produto = Produto::where('descricao', '=', $dados['descricao'])->first();
            $produto->update($dados);
        } else {
            Produto::create($dados);
        }

        $dados = [
            'descricao' => "Cueca Boxer",
            'data_cadastro' => "20181022",
            'valor' => 15,
            'fornecedor_id' => 3,
            'categoria_id' => 3,
            'marca_id' => 3,
            'modelo_id' => 1,
            'codigo_barra' => "0000000006",
        ];
        
        if (Produto::where('descricao', '=', $dados['descricao'])->count()) {
            $produto = Produto::where('descricao', '=', $dados['descricao'])->first();
            $produto->update($dados);
        } else {
            Produto::create($dados);
        }
    }
}
