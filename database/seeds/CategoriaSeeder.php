<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Fitness",
        ];
        
        if (Categoria::where('descricao', '=', $dados['descricao'])->count()) {
            $categoria = Categoria::where('descricao', '=', $dados['descricao'])->first();
            $categoria->update($dados);
        } else {
            Categoria::create($dados);
        }

        $dados = [
            'descricao' => "Íntima Feminino",
        ];
        
        if (Categoria::where('descricao', '=', $dados['descricao'])->count()) {
            $categoria = Categoria::where('descricao', '=', $dados['descricao'])->first();
            $categoria->update($dados);
        } else {
            Categoria::create($dados);
        }

        $dados = [
            'descricao' => "Íntima Masculino",
        ];
        
        if (Categoria::where('descricao', '=', $dados['descricao'])->count()) {
            $categoria = Categoria::where('descricao', '=', $dados['descricao'])->first();
            $categoria->update($dados);
        } else {
            Categoria::create($dados);
        }
    }
}
