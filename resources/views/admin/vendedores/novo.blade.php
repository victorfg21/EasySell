@extends('layout.site')

@section('titulo', 'Clientes')

@section('content')

@include('layout._includes.menu')

<div class="container">
    <div class="row">
        <div class="col-md-4"><!--Div vazia para compensar o menu--></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Cadastro de Vendedor
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.clientes.salvar') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('admin.clientes._form')

                        <div class="col-md-12 text-right">
                            <div class="form-group">
                                <!-- Button HTML (to Trigger Modal) -->
                                <a href="#myModal" role="button" class="btn btn-lg btn-default btn-generico" data-toggle="modal">Cadastrar</a>
                            </div>
                        </div>

                        <!-- Modal HTML -->
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Confirmação Cadastro</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Confirmar cadastro de cliente?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <input type="submit" value="Confirmar" class="btn btn-default btn-generico" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <br>

    <div class="row">
        <div class="col-md-4"><!--Div vazia para compensar o menu--></div>
        <div class="col-md-8">
            <a class="link-generico" href="{{ route('admin.clientes') }}"><i class="fa fa-arrow-circle-left fa-lg"></i>  Retornar para listagem</a>
        </div>
    </div>
</div>



@endsection
