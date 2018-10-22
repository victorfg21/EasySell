<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClienteSeeder::class);
        $this->call(VendedorSeeder::class);
        $this->call(FornecedorSeeder::class);        
        $this->call(CategoriaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(CondicaoSeeder::class);
        $this->call(PagamentoSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(UserSeeder::class);
    }
}
