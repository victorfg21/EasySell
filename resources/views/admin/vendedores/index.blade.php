@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Vendedores</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>CPNJ/CPF</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->nome }}</td>
                        @if(isset($registro->cnpj))
                            <td>{{!! '<span class="cnpj">'.$registro->cnpj.'</span>' !!}}</td>
                        @else
                            <td>{{!! '<span class="cpf">'.$registro->cpf.'</span>' !!}}</td>
                        @endif
                        <td><a href="{{ route('admin.vendedores.editar', $registro->id) }}"><i class="fa fa-edit fa-lg"></i></a></td>
                        <td><a href="{{ route('admin.vendedores.deletar', $registro->id) }}"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg" href="{{ route('admin.vendedores.novo') }}"><i class="fa fa-plus fa-lg"></i></a>
        </div>
    </div>
    <div class="box-footer">
        <div class="row">
            {{ $registros->links()}}
        </div>
    </div>
</div>

@stop
