<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pagamento;
use App\Condicao;

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
        $condicao_list = Condicao::orderBy('descricao')->pluck('descricao', 'id')->all();
        return view('admin.pagamentos.novo', [
            'condicao_list' => $condicao_list,
        ]);
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Pagamento::create($dados);

        return redirect()->route('admin.pagamentos');
    }

    public function editar($id)
    {
        $condicao_list = Condicao::orderBy('descricao')->pluck('descricao', 'id')->all();
        $registro = Pagamento::find($id);
        return view('admin.pagamentos.editar', [
            'registro' => $registro,
            'condicao_list' => $condicao_list,
        ]);
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
