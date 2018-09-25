@extends('layout.site')

@section('titulo', 'Vendedores')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @include('layout._includes.menu')
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Vendedores</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nome</th>
                                    <th>CNPJ/CPF</th>
                                    <th>Editar</th>
                                    <th>Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($registros as $registro)
                                <tr>
                                    <td>{{ $registro->nome }}</td>
                                    <td>{{ isset($registro->cnpj) ? $registro->cnpj : $registro->cpf }}</td>
                                    <td><a href="{{ route('admin.vendedores.editar', $registro->id) }}"><i class="fa fa-edit fa-lg link-generico"></i></a></td>
                                    <td><a href="{{ route('admin.vendedores.deletar', $registro->id) }}"><i class="fa fa-trash-alt fa-lg link-generico"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-default btn-generico btn-lg" href="{{ route('admin.vendedores.novo') }}"><i class="fa fa-plus fa-lg"></i></a>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        {{ $registros->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
