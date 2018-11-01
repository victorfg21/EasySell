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
        $dados['cep'] = str_replace(".", "", str_replace("-", "", $dados['cep']));
        $dados['cpf'] = str_replace(".", "",str_replace("-", "", $dados['cpf']));
        $dados['telefone'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['telefone']))));
        $dados['celular'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['celular']))));

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
        $dados['cep'] = str_replace(".", "", str_replace("-", "", $dados['cep']));
        $dados['cpf'] = str_replace(".", "",str_replace("-", "", $dados['cpf']));
        $dados['telefone'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['telefone']))));
        $dados['celular'] = str_replace(" ", "", str_replace("-", "", str_replace(")", "", str_replace("(", "", $dados['celular']))));

        Cliente::find($id)->update($dados);

        return redirect()->route('admin.clientes');
    }

    public function deletar($id)
    {
        Cliente::find($id)->delete();

        return redirect()->route('admin.clientes');
    }
}
