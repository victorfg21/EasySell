<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Promocao;

class PromocaoController extends Controller
{
    //construtor
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function index()
   {
       $registros = Promocao::paginate(20);
       return view('admin.promocoes.index', compact('registros'));
   }

   public function novo()
   {
       return view('admin.promocoes.novo');
   }

   public function salvar(Request $req)
   {
       $dados = $req->all();
       Promocao::create($dados);

       return redirect()->route('admin.promocoes');
   }

   public function editar($id)
   {
       $registro = Promocao::find($id);
       return view('admin.promocoes.editar', compact('registro'));
   }

   public function atualizar(Request $req, $id)
   {
       $dados = $req->all();
       Promocao::find($id)->update($dados);

       return redirect()->route('admin.promocoes');
   }

   public function deletar($id)
   {
       Promocao::find($id)->delete();

       return redirect()->route('admin.promocoes');
   }
}
