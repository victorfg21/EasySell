<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.vendas.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Venda::create($dados);

        return redirect()->route('admin.vendas');
    }

    public function editar($id)
    {
        $registro = Venda::find($id);
        return view('admin.vendas.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Venda::find($id)->update($dados);

        return redirect()->route('admin.vendas');
    }

    public function deletar($id)
    {
        Venda::find($id)->delete();

        return redirect()->route('admin.vendas');
    }
}
