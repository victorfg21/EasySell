<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Venda;
use App\Venda_Linha;

class VendaController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Venda::paginate(20);
        return view('admin.vendas.index', compact('registros'));
    }

    public function novo()
    {
        $cliente_list = Fornecedor::pluck('nome', 'id')->all();
        $vendedor_list = Categoria::pluck('nome', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();
        return view('admin.produtos.novo', [
            'fornecedor_list' => $fornecedor_list,
            'categoria_list' => $categoria_list,
            'marca_list' => $marca_list,
            'modelo_list' => $modelo_list,
        ]);
        return view('admin.vendas.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Venda::create($dados);

        return redirect()->route('admin.vendas');
    }

    public function view($id)
    {
        $registro = Venda::find($id);
        return view('admin.vendas.view', compact('registro'));
    }

    public function deletar($id)
    {
        Venda::find($id)->delete();

        return redirect()->route('admin.vendas');
    }
}
