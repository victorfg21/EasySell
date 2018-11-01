<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modelo;

class ModeloController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Modelo::paginate(20);
        return view('admin.modelos.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.modelos.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Modelo::create($dados);

        return redirect()->route('admin.modelos');
    }

    public function editar($id)
    {
        $registro = Modelo::find($id);
        return view('admin.modelos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Modelo::find($id)->update($dados);

        return redirect()->route('admin.modelos');
    }

    public function deletar($id)
    {
        Modelo::find($id)->delete();

        return redirect()->route('admin.modelos');
    }
}
