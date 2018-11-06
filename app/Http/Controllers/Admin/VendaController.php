<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Venda;
use App\Venda_Linha;
use App\Cliente;
use App\Vendedor;
use App\Pagamento;
use App\Promocao;

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
        $cliente_list = Cliente::pluck('nome', 'id')->all();
        $vendedor_list = Vendedor::pluck('nome', 'id')->all();
        $pagamento_list = Pagamento::pluck('descricao', 'id')->all();
        $promocao_list = Promocao::pluck('descricao', 'id')->all();
        return view('admin.vendas.novo', [
            'cliente_list' => $cliente_list,
            'vendedor_list' => $vendedor_list,
            'pagamento_list' => $pagamento_list,
            'promocao_list' => $promocao_list,
        ]);
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $dados['peso'] = $metodos->moeda($dados['peso']);
        $dados['valor'] = $metodos->moeda($dados['valor']);

        Venda::create($dados);

        return redirect()->route('admin.vendas');
    }

    public function view($id)
    {
        $registro = Venda::find($id);
        return view('admin.vendas.view', compact('registro'));
    }

    public function deletar($id)
    {
        Venda::find($id)->delete();

        return redirect()->route('admin.vendas');
    }
}
