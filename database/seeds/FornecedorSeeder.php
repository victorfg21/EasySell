<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'nome' => "Dita Moda Intima Ltda",
            'cnpj' => "07407872000118",
            'email' => "cauemanuelcaldeira-80@i9pneus.com.br",
            'telefone' => "3138053007",
            'celular' => "31937195006",
            'numero' => "70",
            'endereco' => "Rua Âmbar",
            'bairro' => "Iguaçu",
            'cidade' => "Ipatinga",
            'estado' => "MG",
            'cep' => "35162019",
        ];
        
        if (Fornecedor::where('cnpj', '=', $dados['cnpj'])->count()) {
            $fornecedor = Fornecedor::where('cnpj', '=', $dados['cnpj'])->first();
            $fornecedor->update($dados);
        } else {
            Fornecedor::create($dados);
        }

        $dados = [
            'nome' => "Three Corpus",
            'cnpj' => "11916538000167",
            'email' => "tesouraria@luiseseverinolimpezaltda.com.br",
            'telefone' => "3138053006",
            'celular' => "31914301998",
            'numero' => "421",
            'endereco' => "Rua Graúnas",
            'bairro' => "São Pedro",
            'cidade' => "Juiz de Fora",
            'estado' => "MG",
            'cep' => "36036468",
        ];
        
        if (Fornecedor::where('cnpj', '=', $dados['cnpj'])->count()) {
            $fornecedor = Fornecedor::where('cnpj', '=', $dados['cnpj'])->first();
            $fornecedor->update($dados);
        } else {
            Fornecedor::create($dados);
        }

        $dados = [
            'nome' => "Bazar Cida",
            'cnpj' => "69901053000180",
            'email' => "www.nelsonestefanygraficaltda.com.br",
            'telefone' => "3135053006",
            'celular' => "31988117463",
            'numero' => "290",
            'endereco' => "Avenida A",
            'bairro' => "Juliana",
            'cidade' => "Belo Horizonte",
            'estado' => "MG",
            'cep' => "31744620",
        ];
        
        if (Fornecedor::where('cnpj', '=', $dados['cnpj'])->count()) {
            $fornecedor = Fornecedor::where('cnpj', '=', $dados['cnpj'])->first();
            $fornecedor->update($dados);
        } else {
            Fornecedor::create($dados);
        }
    }
}
