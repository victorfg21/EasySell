<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fornecedor;

class FornecedorController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Fornecedor::paginate(20);
        return view('admin.fornecedores.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.fornecedores.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $dados['cep'] = str_replace(".", "", str_replace("-", "", $dados['cep']));
        $dados['cnpj'] = str_replace("/", "", str_replace(".", "", str_replace("-", "", $dados['cnpj'])));
        $dados['telefone'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['telefone']))));
        $dados['celular'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['celular']))));

        Fornecedor::create($dados);

        return redirect()->route('admin.fornecedores');
    }

    public function editar($id)
    {
        $registro = Fornecedor::find($id);
        return view('admin.fornecedores.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        $dados['cep'] = str_replace(".", "", str_replace("-", "", $dados['cep']));
        $dados['cnpj'] = str_replace("/", "", str_replace(".", "", str_replace("-", "", $dados['cnpj'])));
        $dados['telefone'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['telefone']))));
        $dados['celular'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['celular']))));

        Fornecedor::find($id)->update($dados);

        return redirect()->route('admin.fornecedores');
    }

    public function deletar($id)
    {
        Fornecedor::find($id)->delete();

        return redirect()->route('admin.fornecedores');
    }
}
