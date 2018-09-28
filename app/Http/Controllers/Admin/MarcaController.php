<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Marca;

class MarcaController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Marca::paginate(20);
        return view('admin.marcas.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.marcas.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Marca::create($dados);

        return redirect()->route('admin.marcas');
    }

    public function editar($id)
    {
        $registro = Marca::find($id);
        return view('admin.marcas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Marca::find($id)->update($dados);

        return redirect()->route('admin.marcas');
    }

    public function deletar($id)
    {
        Marca::find($id)->delete();

        return redirect()->route('admin.marcas');
    }
}
