<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagamento;

class PagamentoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Pagamento::paginate(20);
        return view('admin.pagamentos.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.pagamentos.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Pagamento::create($dados);

        return redirect()->route('admin.pagamentos');
    }

    public function editar($id)
    {
        $registro = Pagamento::find($id);
        return view('admin.pagamentos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Pagamento::find($id)->update($dados);

        return redirect()->route('admin.pagamentos');
    }

    public function deletar($id)
    {
        Pagamento::find($id)->delete();

        return redirect()->route('admin.pagamentos');
    }
}
