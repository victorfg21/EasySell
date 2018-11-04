@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Fornecedores</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="col-xs-6">Nome</th>
                        <th class="col-xs-4">CPNJ</th>
                        <th class="col-xs-1">Editar</th>
                        <th class="col-xs-1">Remover</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->nome }}</td>
                        <td><span class="cnpj">{{ isset($registro->cnpj) ? $registro->cnpj : $registro->cpf }}</span></td>
                        <td><a href="{{ route('admin.fornecedores.editar', $registro->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('admin.fornecedores.deletar', $registro->id) }}"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg" href="{{ route('admin.fornecedores.novo') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <div class="box-footer">
        <div class="row">
            <div class="col-md-12">
                {{ $registros->links()}}
            </div>
        </div>
    </div>
</div>

@stop
