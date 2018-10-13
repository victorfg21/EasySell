<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aviso;
use App\Foto;

class AvisoController extends Controller
{
    //construtor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $registros = Aviso::paginate(20);
        return view('admin.avisos.index', compact('registros'));
    }

    public function novo()
    {
        return view('admin.avisos.novo');
    }

    public function salvar(Request $req)
    {
        Aviso::create($dados);

        return redirect()->route('admin.avisos');
    }

    public function editar($id)
    {
        $registro = Aviso::find($id);
        return view('admin.avisos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        Aviso::find($id)->update($dados);

        return redirect()->route('admin.avisos');
    }

    public function deletar($id)
    {
        Aviso::find($id)->delete();

        return redirect()->route('admin.avisos');
    }
}
