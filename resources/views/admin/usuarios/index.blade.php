@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Produtos</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped tabela-pesquisa">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->descricao }}</td>
                        <td><a href="{{ route('admin.produtos.editar', $registro->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('admin.produtos.deletar', $registro->id) }}"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg" href="{{ route('admin.produtos.novo') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <div class="box-footer">
        <div class="row">
            {{ $registros->links()}}
        </div>
    </div>
</div>

@stop


