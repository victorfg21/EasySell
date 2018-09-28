<?php

namespace App\Http\Controllers\Admin;

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

        Fornecedor::find($id)->update($dados);

        return redirect()->route('admin.fornecedores');
    }

    public function deletar($id)
    {
        Fornecedor::find($id)->delete();

        return redirect()->route('admin.fornecedores');
    }
}
