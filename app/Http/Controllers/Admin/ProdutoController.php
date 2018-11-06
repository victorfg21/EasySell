<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Util;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use App\Produto;
use App\Fornecedor;
use App\Categoria;
use App\Marca;
use App\Modelo;
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
        $registros = Produto::orderBy('descricao')->paginate(20);
        return view('admin.produtos.index', compact('registros'));
    }

    public function novo()
    {
        $fornecedor_list = Fornecedor::pluck('nome', 'id')->all();
        $categoria_list = Categoria::pluck('descricao', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();
        return view('admin.produtos.novo', [
            'fornecedor_list' => $fornecedor_list,
            'categoria_list' => $categoria_list,
            'marca_list' => $marca_list,
            'modelo_list' => $modelo_list,
        ]);
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $dados['peso'] = $metodos->moeda($dados['peso']);
        $dados['valor'] = $metodos->moeda($dados['valor']);

        $idProduto = Produto::create($dados)->id;

        $codeBarra = $this->geraCodBarras($idProduto);
        $dados['codigo_barra'] = $codeBarra;

        Produto::find($id)->update($dados);
        
        return redirect()->route('admin.produtos');
    }

    public function editar($id)
    {
        $registro = Produto::find($id);

        $registro['peso'] = str_replace('.', ',', $registro['peso']);
        $registro['valor'] = str_replace('.', ',', $registro['valor']);
        
        $fornecedor_list = Fornecedor::pluck('nome', 'id')->all();
        $categoria_list = Categoria::pluck('descricao', 'id')->all();
        $marca_list = Marca::pluck('descricao', 'id')->all();
        $modelo_list = Modelo::pluck('descricao', 'id')->all();
        return view('admin.produtos.editar', [
           'registro' => $registro,
           'fornecedor_list' => $fornecedor_list,
           'categoria_list' => $categoria_list,
           'marca_list' => $marca_list,
           'modelo_list' => $modelo_list,
        ]);
    }

    public function atualizar(Request $req, $id)
    {
        $metodos = new Metodos();
        $dados = $req->all();

        $dados['peso'] = $metodos->moeda($dados['peso']);
        $dados['valor'] = $metodos->moeda($dados['valor']);

        $codeBarra = $this->geraCodBarras($id);
        $dados['codigo_barra'] = $codeBarra;

        Produto::find($id)->update($dados);

        return redirect()->route('admin.produtos');
    }

    public function deletar($id)
    {
        Produto::find($id)->delete();

        return redirect()->route('admin.produtos');
    }

    private function geraCodBarras($id)
    {
        $idProduto = $id;
        $idProduto = str_pad($idProduto, 10, "0", STR_PAD_LEFT);

        $barcode = new BarcodeGenerator();
        $barcode->setText($idProduto);
        $barcode->setType(BarcodeGenerator::Code39);
        $barcode->setScale(2);
        $barcode->setThickness(25);
        $barcode->setFontSize(10);
        $code = $barcode->generate();

        return $code;
    }
}
