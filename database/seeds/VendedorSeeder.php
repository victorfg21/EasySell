<?php

use Illuminate\Database\Seeder;
use App\Vendedor;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'nome' => "Cauê Manuel Caldeira",
            'rg' => "45.057.733-8",
            'cpf' => "08227474640",
            'cnpj' => "00559336000199",
            'nascimento' => "19880102",
            'email' => "cauemanuelcaldeira-80@i9pneus.com.br",
            'telefone' => "3138053007",
            'celular' => "31910104259",
            'numero' => "628",
            'endereco' => "Rua Afonso Guimarães",
            'bairro' => "Cidade Nobre",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162350",
        ];
        
        if (Vendedor::where('cpf', '=', $dados['cpf'])->count()) {
            $vendedor = Vendedor::where('cpf', '=', $dados['cpf'])->first();
            $vendedor->update($dados);
        } else {
            Vendedor::create($dados);
        }

        $dados = [
            'nome' => "Patrícia Valentina Carvalho",
            'rg' => "44.810.687-5",
            'cpf' => "94951479648",
            'cnpj' => "96202261000163",
            'nascimento' => "19880203",
            'email' => "patriciavalentinacarvalho..patriciavalentinacarvalho@accent.com.br",
            'telefone' => "3138053006",
            'celular' => "31966649224",
            'numero' => "421",
            'endereco' => "Rua Graúnas",
            'bairro' => "Vila Celeste",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162504",
        ];
        
        if (Vendedor::where('cpf', '=', $dados['cpf'])->count()) {
            $vendedor = Vendedor::where('cpf', '=', $dados['cpf'])->first();
            $vendedor->update($dados);
        } else {
            Vendedor::create($dados);
        }

        $dados = [
            'nome' => "Tomás Otávio Ramos",
            'rg' => "30.292.062-6",
            'cpf' => "36355582304",
            'cnpj' => "56731458000175",
            'nascimento' => "19960426",
            'email' => "tomasotavioramos_@estevao.ind.br",
            'telefone' => "3125053006",
            'celular' => "31913901975",
            'numero' => "762",
            'endereco' => "Avenida Forquilha",
            'bairro' => "Chácaras Madalena",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35164005",
        ];
        
        if (Vendedor::where('cpf', '=', $dados['cpf'])->count()) {
            $vendedor = Vendedor::where('cpf', '=', $dados['cpf'])->first();
            $vendedor->update($dados);
        } else {
            Vendedor::create($dados);
        }

        $dados = [
            'nome' => "Sophie Regina da Costa",
            'rg' => "41.164.530-4",
            'cpf' => "49422866626",
            'cnpj' => "14591763000169",
            'nascimento' => "19880103",
            'email' => "sophiereginadacosta__sophiereginadacosta@emerson.com",
            'telefone' => "3138472006",
            'celular' => "31955266276",
            'numero' => "669",
            'endereco' => "Avenida Monteiro Lobato",
            'bairro' => "Cidade Nobre",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162394",
        ];
        
        if (Vendedor::where('cpf', '=', $dados['cpf'])->count()) {
            $vendedor = Vendedor::where('cpf', '=', $dados['cpf'])->first();
            $vendedor->update($dados);
        } else {
            Vendedor::create($dados);
        }
    }
}
