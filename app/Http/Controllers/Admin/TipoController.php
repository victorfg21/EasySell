<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo;

class TipoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Tipo::paginate(20);
        return view('admin.tipos.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.tipos.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Tipo::create($dados);

        return redirect()->route('admin.tipos');
    }

    public function editar($id)
    {
        $registro = Tipo::find($id);
        return view('admin.tipos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Tipo::find($id)->update($dados);

        return redirect()->route('admin.tipos');
    }

    public function deletar($id)
    {
        Tipo::find($id)->delete();

        return redirect()->route('admin.tipos');
    }
}
