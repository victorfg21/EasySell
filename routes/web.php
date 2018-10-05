<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function(){
    return view('auth/login');
});

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

//Cliente
Route::get('admin/clientes', ['as' => 'admin.clientes', 'uses' => 'Admin\ClienteController@index']);
Route::get('admin/clientes/novo', ['as' => 'admin.clientes.novo', 'uses' => 'Admin\ClienteController@novo']);
Route::post('admin/clientes/salvar', ['as' => 'admin.clientes.salvar', 'uses' => 'Admin\ClienteController@salvar']);
Route::get('admin/clientes/editar/{id}', ['as' => 'admin.clientes.editar', 'uses' => 'Admin\ClienteController@editar']);
Route::put('admin/clientes/atualizar/{id}', ['as' => 'admin.clientes.atualizar', 'uses' => 'Admin\ClienteController@atualizar']);
Route::get('admin/clientes/deletar/{id}', ['as' => 'admin.clientes.deletar', 'uses' => 'Admin\ClienteController@deletar']);

//Vendedor
Route::get('admin/vendedores', ['as' => 'admin.vendedores', 'uses' => 'Admin\VendedorController@index']);
Route::get('admin/vendedores/novo', ['as' => 'admin.vendedores.novo', 'uses' => 'Admin\VendedorController@novo']);
Route::post('admin/vendedores/salvar', ['as' => 'admin.vendedores.salvar', 'uses' => 'Admin\VendedorController@salvar']);
Route::get('admin/vendedores/editar/{id}', ['as' => 'admin.vendedores.editar', 'uses' => 'Admin\VendedorController@editar']);
Route::put('admin/vendedores/atualizar/{id}', ['as' => 'admin.vendedores.atualizar', 'uses' => 'Admin\VendedorController@atualizar']);
Route::get('admin/vendedores/deletar/{id}', ['as' => 'admin.vendedores.deletar', 'uses' => 'Admin\VendedorController@deletar']);

//Fornecedor
Route::get('admin/fornecedores', ['as' => 'admin.fornecedores', 'uses' => 'Admin\FornecedorController@index']);
Route::get('admin/fornecedores/novo', ['as' => 'admin.fornecedores.novo', 'uses' => 'Admin\FornecedorController@novo']);
Route::post('admin/fornecedores/salvar', ['as' => 'admin.fornecedores.salvar', 'uses' => 'Admin\FornecedorController@salvar']);
Route::get('admin/fornecedores/editar/{id}', ['as' => 'admin.fornecedores.editar', 'uses' => 'Admin\FornecedorController@editar']);
Route::put('admin/fornecedores/atualizar/{id}', ['as' => 'admin.fornecedores.atualizar', 'uses' => 'Admin\FornecedorController@atualizar']);
Route::get('admin/fornecedores/deletar/{id}', ['as' => 'admin.fornecedores.deletar', 'uses' => 'Admin\FornecedorController@deletar']);

//Produto
Route::get('admin/produtos', ['as' => 'admin.produtos', 'uses' => 'Admin\ProdutoController@index']);
Route::get('admin/produtos/novo', ['as' => 'admin.produtos.novo', 'uses' => 'Admin\ProdutoController@novo']);
Route::post('admin/produtos/salvar', ['as' => 'admin.produtos.salvar', 'uses' => 'Admin\ProdutoController@salvar']);
Route::get('admin/produtos/editar/{id}', ['as' => 'admin.produtos.editar', 'uses' => 'Admin\ProdutoController@editar']);
Route::put('admin/produtos/atualizar/{id}', ['as' => 'admin.produtos.atualizar', 'uses' => 'Admin\ProdutoController@atualizar']);
Route::get('admin/produtos/deletar/{id}', ['as' => 'admin.produtos.deletar', 'uses' => 'Admin\ProdutoController@deletar']);

//Estoque
Route::get('admin/estoque', ['as' => 'admin.estoque', 'uses' => 'Admin\EstoqueController@index']);
Route::put('admin/estoque/entrada', ['as' => 'admin.estoque.entrada', 'uses' => 'Admin\EstoqueController@novo']);
Route::put('admin/estoque/saida', ['as' => 'admin.estoque.saida', 'uses' => 'Admin\EstoqueController@salvar']);

//Venda
Route::get('admin/vendas', ['as' => 'admin.vendas', 'uses' => 'Admin\VendaController@index']);
Route::get('admin/vendas/novo', ['as' => 'admin.vendas.novo', 'uses' => 'Admin\VendaController@novo']);
Route::post('admin/vendas/salvar', ['as' => 'admin.vendas.salvar', 'uses' => 'Admin\VendaController@salvar']);
Route::get('admin/vendas/cancelar/{id}', ['as' => 'admin.vendas.cancelar', 'uses' => 'Admin\VendaController@cancelar']);

//Pagamentos
Route::get('admin/pagamentos', ['as' => 'admin.pagamentos', 'uses' => 'Admin\PagamentoController@index']);
Route::get('admin/pagamentos/novo', ['as' => 'admin.pagamentos.novo', 'uses' => 'Admin\PagamentoController@novo']);
Route::post('admin/pagamentos/salvar', ['as' => 'admin.pagamentos.salvar', 'uses' => 'Admin\PagamentoController@salvar']);
Route::get('admin/pagamentos/editar/{id}', ['as' => 'admin.pagamentos.editar', 'uses' => 'Admin\PagamentoController@editar']);
Route::put('admin/pagamentos/atualizar/{id}', ['as' => 'admin.pagamentos.atualizar', 'uses' => 'Admin\PagamentoController@atualizar']);
Route::get('admin/pagamentos/deletar/{id}', ['as' => 'admin.pagamentos.deletar', 'uses' => 'Admin\PagamentoController@deletar']);

//Condição
Route::get('admin/condicoes', ['as' => 'admin.condicoes', 'uses' => 'Admin\CondicaoController@index']);
Route::get('admin/condicoes/novo', ['as' => 'admin.condicoes.novo', 'uses' => 'Admin\CondicaoController@novo']);
Route::post('admin/condicoes/salvar', ['as' => 'admin.condicoes.salvar', 'uses' => 'Admin\CondicaoController@salvar']);
Route::get('admin/condicoes/editar/{id}', ['as' => 'admin.condicoes.editar', 'uses' => 'Admin\CondicaoController@editar']);
Route::put('admin/condicoes/atualizar/{id}', ['as' => 'admin.condicoes.atualizar', 'uses' => 'Admin\CondicaoController@atualizar']);
Route::get('admin/condicoes/deletar/{id}', ['as' => 'admin.condicoes.deletar', 'uses' => 'Admin\CondicaoController@deletar']);

//Categoria
Route::get('admin/categorias', ['as' => 'admin.categorias', 'uses' => 'Admin\CategoriaController@index']);
Route::get('admin/categorias/novo', ['as' => 'admin.categorias.novo', 'uses' => 'Admin\CategoriaController@novo']);
Route::post('admin/categorias/salvar', ['as' => 'admin.categorias.salvar', 'uses' => 'Admin\CategoriaController@salvar']);
Route::get('admin/categorias/editar/{id}', ['as' => 'admin.categorias.editar', 'uses' => 'Admin\CategoriaController@editar']);
Route::put('admin/categorias/atualizar/{id}', ['as' => 'admin.categorias.atualizar', 'uses' => 'Admin\CategoriaController@atualizar']);
Route::get('admin/categorias/deletar/{id}', ['as' => 'admin.categorias.deletar', 'uses' => 'Admin\CategoriaController@deletar']);

//Tipo
Route::get('admin/tipos', ['as' => 'admin.tipos', 'uses' => 'Admin\TipoController@index']);
Route::get('admin/tipos/novo', ['as' => 'admin.tipos.novo', 'uses' => 'Admin\TipoController@novo']);
Route::post('admin/tipos/salvar', ['as' => 'admin.tipos.salvar', 'uses' => 'Admin\TipoController@salvar']);
Route::get('admin/tipos/editar/{id}', ['as' => 'admin.tipos.editar', 'uses' => 'Admin\TipoController@editar']);
Route::put('admin/tipos/atualizar/{id}', ['as' => 'admin.tipos.atualizar', 'uses' => 'Admin\TipoController@atualizar']);
Route::get('admin/tipos/deletar/{id}', ['as' => 'admin.tipos.deletar', 'uses' => 'Admin\TipoController@deletar']);

//Aviso
Route::get('admin/avisos', ['as' => 'admin.avisos', 'uses' => 'Admin\AvisoController@index']);
Route::get('admin/avisos/novo', ['as' => 'admin.avisos.novo', 'uses' => 'Admin\AvisoController@novo']);
Route::post('admin/avisos/salvar', ['as' => 'admin.avisos.salvar', 'uses' => 'Admin\AvisoController@salvar']);
Route::get('admin/avisos/editar/{id}', ['as' => 'admin.avisos.editar', 'uses' => 'Admin\AvisoController@editar']);
Route::put('admin/avisos/atualizar/{id}', ['as' => 'admin.avisos.atualizar', 'uses' => 'Admin\AvisoController@atualizar']);
Route::get('admin/avisos/deletar/{id}', ['as' => 'admin.avisos.deletar', 'uses' => 'Admin\AvisoController@deletar']);

//Promoção
Route::get('admin/promocoes', ['as' => 'admin.promocoes', 'uses' => 'Admin\PromocaoController@index']);
Route::get('admin/promocoes/novo', ['as' => 'admin.promocoes.novo', 'uses' => 'Admin\PromocaoController@novo']);
Route::post('admin/promocoes/salvar', ['as' => 'admin.promocoes.salvar', 'uses' => 'Admin\PromocaoController@salvar']);
Route::get('admin/promocoes/editar/{id}', ['as' => 'admin.promocoes.editar', 'uses' => 'Admin\PromocaoController@editar']);
Route::put('admin/promocoes/atualizar/{id}', ['as' => 'admin.promocoes.atualizar', 'uses' => 'Admin\PromocaoController@atualizar']);
Route::get('admin/promocoes/deletar/{id}', ['as' => 'admin.promocoes.deletar', 'uses' => 'Admin\PromocaoController@deletar']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
