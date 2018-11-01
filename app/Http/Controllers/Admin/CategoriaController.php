<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Categoria::paginate(20);
        return view('admin.categorias.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.categorias.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Categoria::create($dados);

        return redirect()->route('admin.categorias');
    }

    public function editar($id)
    {
        $registro = Categoria::find($id);
        return view('admin.categorias.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Categoria::find($id)->update($dados);

        return redirect()->route('admin.categorias');
    }

    public function deletar($id)
    {
        Categoria::find($id)->delete();

        return redirect()->route('admin.categorias');
    }
}
