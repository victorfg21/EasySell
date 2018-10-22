<?php

use Illuminate\Database\Seeder;
use App\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'descricao' => "Cueca",
        ];
        
        if (Modelo::where('descricao', '=', $dados['descricao'])->count()) {
            $modelo = Modelo::where('descricao', '=', $dados['descricao'])->first();
            $modelo->update($dados);
        } else {
            Modelo::create($dados);
        }

        $dados = [
            'descricao' => "Calcinha",
        ];
        
        if (Modelo::where('descricao', '=', $dados['descricao'])->count()) {
            $modelo = Modelo::where('descricao', '=', $dados['descricao'])->first();
            $modelo->update($dados);
        } else {
            Modelo::create($dados);
        }

        $dados = [
            'descricao' => "Sutiã",
        ];
        
        if (Modelo::where('descricao', '=', $dados['descricao'])->count()) {
            $modelo = Modelo::where('descricao', '=', $dados['descricao'])->first();
            $modelo->update($dados);
        } else {
            Modelo::create($dados);
        }

        $dados = [
            'descricao' => "Top",
        ];
        
        if (Modelo::where('descricao', '=', $dados['descricao'])->count()) {
            $modelo = Modelo::where('descricao', '=', $dados['descricao'])->first();
            $modelo->update($dados);
        } else {
            Modelo::create($dados);
        }

        $dados = [
            'descricao' => "Leg",
        ];
        
        if (Modelo::where('descricao', '=', $dados['descricao'])->count()) {
            $modelo = Modelo::where('descricao', '=', $dados['descricao'])->first();
            $modelo->update($dados);
        } else {
            Modelo::create($dados);
        }

        $dados = [
            'descricao' => "Lingerie",
        ];
        
        if (Modelo::where('descricao', '=', $dados['descricao'])->count()) {
            $modelo = Modelo::where('descricao', '=', $dados['descricao'])->first();
            $modelo->update($dados);
        } else {
            Modelo::create($dados);
        }
    }
}
