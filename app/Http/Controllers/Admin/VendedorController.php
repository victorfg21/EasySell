<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vendedor;

class VendedorController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Vendedor::paginate(20);
        return view('admin.vendedores.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.vendedores.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $dados['cep'] = str_replace(".", "", str_replace("-", "", $dados['cep']));
        $dados['cpf'] = str_replace("/", "", str_replace(".", "", str_replace("-", "", $dados['cpf'])));
        $dados['cnpj'] = str_replace("/", "", str_replace(".", "", str_replace("-", "", $dados['cnpj'])));
        $dados['telefone'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['telefone']))));
        $dados['celular'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['celular']))));

        Vendedor::create($dados);

        return redirect()->route('admin.vendedores.novo');
    }

    public function editar($id)
    {
        $registro = Vendedor::find($id);
        return view('admin.vendedores.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        $dados['cep'] = str_replace(".", "", str_replace("-", "", $dados['cep']));
        $dados['cpf'] = str_replace("/", "", str_replace(".", "", str_replace("-", "", $dados['cpf'])));
        $dados['cnpj'] = str_replace("/", "", str_replace(".", "", str_replace("-", "", $dados['cnpj'])));
        $dados['telefone'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['telefone']))));
        $dados['celular'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['celular']))));

        Vendedor::find($id)->update($dados);

        return redirect()->route('admin.vendedores');
    }

    public function deletar($id)
    {
        Vendedor::find($id)->delete();

        return redirect()->route('admin.vendedores');
    }
}
