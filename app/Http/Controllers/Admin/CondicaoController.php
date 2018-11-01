<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Condicao;

class CondicaoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Condicao::orderBy('descricao')->paginate(20);
        return view('admin.condicoes.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.condicoes.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Condicao::create($dados);

        return redirect()->route('admin.condicoes');
    }

    public function editar($id)
    {
        $registro = Condicao::find($id);
        return view('admin.condicoes.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        $dados['vista'] = (!isset($dados['vista']))? false : true;

        Condicao::find($id)->update($dados);

        return redirect()->route('admin.condicoes');
    }

    public function deletar($id)
    {
        Condicao::find($id)->delete();

        return redirect()->route('admin.condicoes');
    }
}
