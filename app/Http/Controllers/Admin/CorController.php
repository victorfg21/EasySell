<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cor;

class CorController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Cor::paginate(20);
        return view('admin.cores.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.cores.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Cor::create($dados);

        return redirect()->route('admin.cores');
    }

    public function editar($id)
    {
        $registro = Cor::find($id);
        return view('admin.cores.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Cor::find($id)->update($dados);

        return redirect()->route('admin.cores');
    }

    public function deletar($id)
    {
        Cor::find($id)->delete();

        return redirect()->route('admin.cores');
    }
}
