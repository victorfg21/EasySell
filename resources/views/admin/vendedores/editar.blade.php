@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Editar Vendedor</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('admin.vendedores.atualizar', $registro->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put"/>

            @include('admin.vendedores._form')

            <div class="col-md-12 text-right">
                <div class="form-group">
                    <!-- Button HTML (to Trigger Modal) -->
                    <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-toggle="modal">Atualizar</a>
                </div>
            </div>

            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Atualizar Vendedor</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Confirmar atualização dos dados do vendedor?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <input type="submit" value="Confirmar" class="btn btn-primary" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a class="link-generico" href="{{ route('admin.vendedores') }}"><i class="fa fa-arrow-circle-left fa-lg"></i>  Retornar para listagem</a>
    </div>
</div>

@stop

