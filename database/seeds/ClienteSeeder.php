<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'nome' => "Iago Caio da Costa",
            'rg' => "10.763.371-1",
            'cpf' => "41632375699",
            'nascimento' => "19960426",
            'email' => "admiagocaiodacosta_@ipk.org.br",
            'telefone' => "3125053006",
            'celular' => "31981829172",
            'numero' => "762",
            'endereco' => "Rua Saião",
            'logradouro' => "Rua",
            'bairro' => "Chácaras Madalena",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162872",
        ];

        if (Cliente::where('cpf', '=', $dados['cpf'])->count()) {
            $usuario = Cliente::where('cpf', '=', $dados['cpf'])->first();
            $usuario->update($dados);
        } else {
            Cliente::create($dados);
        }

        $dados = [
            'nome' => "José Breno Oliveira",
            'rg' => "50.760.665-6",
            'cpf' => "58762985221",
            'nascimento' => "19960426",
            'email' => "josebrenooliveira-81@pharmaterra.com.br",
            'telefone' => "3125053006",
            'celular' => "31981829172",
            'numero' => "762",
            'endereco' => "Rua Saião",
            'logradouro' => "Rua",
            'bairro' => "Chácaras Madalena",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162872",
        ];

        if (Cliente::where('cpf', '=', $dados['cpf'])->count()) {
            $usuario = Cliente::where('cpf', '=', $dados['cpf'])->first();
            $usuario->update($dados);
        } else {
            Cliente::create($dados);
        }

        $dados = [
            'nome' => "Tomás Otávio Ramos",
            'rg' => "30.292.062-6",
            'cpf' => "36355582304",
            'nascimento' => "19960426",
            'email' => "tomasotavioramos_@estevao.ind.br",
            'telefone' => "3125053006",
            'celular' => "31981829172",
            'numero' => "762",
            'endereco' => "Rua Saião",
            'logradouro' => "Rua",
            'bairro' => "Chácaras Madalena",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162872",
        ];

        if (Cliente::where('cpf', '=', $dados['cpf'])->count()) {
            $usuario = Cliente::where('cpf', '=', $dados['cpf'])->first();
            $usuario->update($dados);
        } else {
            Cliente::create($dados);
        }
    }
}
