<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Dita Moda Íntima",
        ];
        
        if (Marca::where('descricao', '=', $dados['descricao'])->count()) {
            $marca = Marca::where('descricao', '=', $dados['descricao'])->first();
            $marca->update($dados);
        } else {
            Marca::create($dados);
        }

        $dados = [
            'descricao' => "Three Corpus",
        ];
        
        if (Marca::where('descricao', '=', $dados['descricao'])->count()) {
            $marca = Marca::where('descricao', '=', $dados['descricao'])->first();
            $marca->update($dados);
        } else {
            Marca::create($dados);
        }

        $dados = [
            'descricao' => "Torp",
        ];
        
        if (Marca::where('descricao', '=', $dados['descricao'])->count()) {
            $marca = Marca::where('descricao', '=', $dados['descricao'])->first();
            $marca->update($dados);
        } else {
            Marca::create($dados);
        }
    }
}
