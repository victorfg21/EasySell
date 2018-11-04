@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Vendas</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Data</th>
                        <th>Valor Total</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->Cliente->nome }}</td>
                        <td><span class="data">{{ date( 'd/m/Y' , strtotime($registro->data_venda)) }}</span></td>
                        <td>{{ $registro->total_valor }}</td>
                        <td><a href="{{ route('admin.vendas.editar', $registro->id) }}"><i class="fa fa-search fa-lg"></i></a></td>
                        <td><a href="{{ route('admin.vendas.cancelar', $registro->id) }}"><i class="fa fa-ban fa-lg"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg" href="{{ route('admin.vendas.novo') }}"><i class="fa fa-plus fa-lg"></i></a>
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


