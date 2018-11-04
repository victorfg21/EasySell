<div class="box">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Cliente" class="control-label">Cliente</label>
            <select for="Cliente" class="form-control js-example-basic-single" name="cliente" required>
                @foreach ($cliente_list as $item => $nome)
                    @if(isset($registro->Cliente->id))
                        @if ($item == $registro->Cliente->id)
                            <option value="{{ $item }}" selected>{{ $nome }}</option>
                        @else
                            <option value="{{ $item }}">{{ $nome }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Vendedor" class="control-label">Vendedor</label>
            <select for="Vendedor" class="form-control js-example-basic-single" name="vendedor" required>
                @foreach ($vendedor_list as $item => $nome)
                    @if(isset($registro->Vendedor->id))
                        @if ($item == $registro->Vendedor->id)
                            <option value="{{ $item }}" selected>{{ $nome }}</option>
                        @else
                            <option value="{{ $item }}">{{ $nome }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="CodBarra" class="control-label">Código de Barras</label>
            <div class="row">
                <div class="col-md-4">
                    <input for="CodBarra" class="form-control cep" type="text" name="cep" value=""/>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-default" id="codigoBarra">Buscar Produto</a>
                </div>
            </div>
        </div>        
    </div>

    <div class="box-header with-border"> 
        <h3 class="box-title">Foto</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <input class="form-control" type="file" name="foto" value="{{ isset($registro->foto) ? $registro->foto : '' }}"/>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>