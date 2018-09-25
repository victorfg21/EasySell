<?php

namespace App\Http\Controllers\Admin;

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

        $cep = $dados['cep'];
        $cep =str_replace("-", "", $cep);
        $dados['cep'] = $cep;

        $cpf = $dados['cpf'];
        $cpf =str_replace(".", "", $cpf);
        $cpf =str_replace("-", "", $cpf);
        $dados['cpf'] = $cpf;

        Cliente::create($dados);

        return redirect()->route('admin.vendedores');
    }

    public function editar($id)
    {
        $registro = Cliente::find($id);
        return view('admin.vendedores.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        $cep = $dados['cep'];
        $cep =str_replace("-", "", $cep);
        $dados['cep'] = $cep;

        $cpf = $dados['cpf'];
        $cpf =str_replace(".", "", $cpf);
        $cpf =str_replace("-", "", $cpf);
        $dados['cpf'] = $cpf;

        $cpf = $dados['cnpj'];
        $cpf =str_replace(".", "", $cnpj);
        $cpf =str_replace("-", "", $cnpj);
        $cpf =str_replace("/", "", $cnpj);
        $dados['cnpj'] = $cnpj;

        $tel = $dados['telefone'];
        $tel =str_replace("(", "", $tel);
        $tel =str_replace(")", "", $tel);
        $tel =str_replace("-", "", $tel);
        $tel =str_replace(" ", "", $tel);
        $dados['telefone'] = $tel;

        $cel = $dados['celular'];
        $cel =str_replace("(", "", $cel);
        $cel =str_replace(")", "", $cel);
        $cel =str_replace("-", "", $cel);
        $cel =str_replace(" ", "", $cel);
        $dados['celular'] = $cel;

        $cel = $dados['cep'];
        $cel =str_replace(".", "", $cep);
        $cel =str_replace("-", "", $cep);
        $dados['cep'] = $cep;

        Cliente::find($id)->update($dados);

        return redirect()->route('admin.vendedores');
    }

    public function deletar($id)
    {
        Cliente::find($id)->delete();

        return redirect()->route('admin.vendedores');
    }
}
