<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Fornecedor;
use App\Categoria;
use App\Marca;
use App\Modelo;
use App\Foto;

class ProdutoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Produto::paginate(20);
        return view('admin.produtos.index', compact('registros'));
    }

    public function novo()
    {
        $fornecedor_list = Fornecedor::pluck('nome', 'id')->all();
        $categoria_list = Categoria::pluck('descricao', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();
        return view('admin.produtos.novo', [
            'fornecedor_list' => $fornecedor_list,
            'categoria_list' => $categoria_list,
            'marca_list' => $marca_list,
            'modelo_list' => $modelo_list,
        ]);
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Produto::create($dados);

        return redirect()->route('admin.produtos');
    }

    public function editar($id)
    {
        $registro = Produto::find($id);
        $fornecedor_list = Fornecedor::pluck('nome', 'id')->all();
        $categoria_list = Categoria::pluck('descricao', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();
        return view('admin.produtos.editar', [
           'registro' => $registro,
           'fornecedor_list' => $fornecedor_list,
           'categoria_list' => $categoria_list,
           'marca_list' => $marca_list,
           'modelo_list' => $modelo_list,
        ]);
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Produto::find($id)->update($dados);

        return redirect()->route('admin.produtos');
    }

    public function deletar($id)
    {
        Produto::find($id)->delete();

        return redirect()->route('admin.produtos');
    }
}
