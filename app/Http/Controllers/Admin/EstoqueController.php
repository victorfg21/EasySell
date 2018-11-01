<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estoque;
use App\Estoque_Movimentacao;

class EstoqueController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Estoque::paginate(20);
        return view('admin.estoque.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.estoque.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Estoque::create($dados);

        return redirect()->route('admin.estoque');
    }

    public function editar($id)
    {
        $registro = Estoque::find($id);
        return view('admin.estoque.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Estoque::find($id)->update($dados);

        return redirect()->route('admin.estoque');
    }

    public function deletar($id)
    {
        Estoque::find($id)->delete();

        return redirect()->route('admin.estoque');
    }
}
