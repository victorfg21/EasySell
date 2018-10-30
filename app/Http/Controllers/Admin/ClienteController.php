<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClienteController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Cliente::paginate(20);
        return view('admin.clientes.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.clientes.novo');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        $cep = $dados['cep'];
        $cep =str_replace("-", "", $cep);
        $cep =str_replace(".", "", $cep);
        $dados['cep'] = $cep;

        $cpf = $dados['cpf'];
        $cpf =str_replace(".", "", $cpf);
        $cpf =str_replace("-", "", $cpf);
        $dados['cpf'] = $cpf;

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

        Cliente::create($dados);

        return redirect()->route('admin.clientes');
    }

    public function editar($id)
    {
        $registro = Cliente::find($id);
        return view('admin.clientes.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        $cep = $dados['cep'];
        $cep =str_replace("-", "", $cep);
        $cep =str_replace(".", "", $cep);
        $dados['cep'] = $cep;

        $cpf = $dados['cpf'];
        $cpf =str_replace(".", "", $cpf);
        $cpf =str_replace("-", "", $cpf);
        $dados['cpf'] = $cpf;

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

        Cliente::find($id)->update($dados);

        return redirect()->route('admin.clientes');
    }

    public function deletar($id)
    {
        Cliente::find($id)->delete();

        return redirect()->route('admin.clientes');
    }
}
