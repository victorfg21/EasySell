@extends('adminlte::page')

@section('title', 'easySell')

@section('content_header')

@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Visualização Venda</h3>
    </div>
    <div class="box-body">
        <form>
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put"/>

            @include('admin.vendas._form')

        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.vendas') }}"><i class="fa fa-arrow-circle-left fa-lg"></i>  Retornar para listagem</a>
    </div>
</div>

@stop
