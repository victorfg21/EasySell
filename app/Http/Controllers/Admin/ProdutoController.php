<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Foto;

class ProdutoController extends Controller
{
   //construtor
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function index()
   {
       $registros = Produto::paginate(20);
       return view('admin.produtos.index', compact('registros'));
   }

   public function novo()
   {
       return view('admin.produtos.novo');
   }

   public function salvar(Request $req)
   {
       $dados = $req->all();
       Produto::create($dados);

       return redirect()->route('admin.produtos');
   }

   public function editar($id)
   {
       $registro = Produto::find($id);
       return view('admin.produtos.editar', compact('registro'));
   }

   public function atualizar(Request $req, $id)
   {
       $dados = $req->all();
       Produto::find($id)->update($dados);

       return redirect()->route('admin.produtos');
   }

   public function deletar($id)
   {
       Produto::find($id)->delete();

       return redirect()->route('admin.produtos');
   }
}
