@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Promoções</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped tabela-pesquisa">
                <thead>
                    <tr>
                        <th class="col-xs-4">Descrição</th>
                        <th class="col-xs-3">Início</th>
                        <th class="col-xs-3">Fim</th>
                        <th class="col-xs-1">Editar</th>
                        <th class="col-xs-1">Remover</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->descricao }}</td>
                        <td><span class="data">{{ date( 'd/m/Y' , strtotime($registro->inicio)) }}</span></td>
                        <td><span class="data">{{ date( 'd/m/Y' , strtotime($registro->fim)) }}</span></td>
                        <td><a href="{{ route('admin.promocoes.editar', $registro->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('admin.promocoes.deletar', $registro->id) }}"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg" href="{{ route('admin.promocoes.novo') }}"><i class="fa fa-plus fa-lg"></i></a>
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


