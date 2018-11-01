<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Promocao;
use App\Categoria;
use App\Marca;
use App\Modelo;

class PromocaoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Promocao::paginate(20);
        return view('admin.promocoes.index', compact('registros'));
    }

    public function novo()
    {
        $categoria_list = Categoria::pluck('descricao', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();

        return view('admin.promocoes.novo', [
            'categoria_list' => $categoria_list,
            'marca_list' => $marca_list,
            'modelo_list' => $modelo_list,
        ]);
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Promocao::create($dados);

        return redirect()->route('admin.promocoes');
    }

    public function editar($id)
    {
        $registro = Promocao::find($id);
        $categoria_list = Categoria::pluck('descricao', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();
        return view('admin.promocoes.editar', [
            'registro' => $registro,
            'categoria_list' => $categoria_list,
            'marca_list' => $marca_list,
            'modelo_list' => $modelo_list,
        ]);
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        Promocao::find($id)->update($dados);

        return redirect()->route('admin.promocoes');
    }

    public function deletar($id)
    {
        Promocao::find($id)->delete();

        return redirect()->route('admin.promocoes');
    }
}
