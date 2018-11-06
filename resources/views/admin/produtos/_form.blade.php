<div class="box">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Descricao" class="control-label">Descrição</label>
            <input for="Descricao" class="form-control" type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Fornecedor" class="control-label">Fornecedor</label>
            <select for="Fornecedor" class="form-control js-example-basic-single" name="fornecedor" required>
                @foreach ($fornecedor_list as $item => $nome)
                    @if(isset($registro->Fornecedor->id))
                        @if ($item == $registro->Fornecedor->id)
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
            <label for="Categoria" class="control-label">Categoria</label>
            <select for="Categoria" class="form-control js-example-basic-single" name="categoria" required>
                @foreach ($categoria_list as $item => $descricao)
                    @if(isset($registro->Categoria->id))
                        @if ($item == $registro->Categoria->id)
                            <option value="{{ $item }}" selected>{{ $descricao }}</option>
                        @else
                            <option value="{{ $item }}">{{ $descricao }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $descricao }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Marca" class="control-label">Marca</label>
            <select for="Marca" class="form-control js-example-basic-single" name="marca" required>
                @foreach ($marca_list as $item => $descricao)
                    @if(isset($registro->Marca->id))
                        @if ($item == $registro->Marca->id)
                            <option value="{{ $item }}" selected>{{ $descricao }}</option>
                        @else
                            <option value="{{ $item }}">{{ $descricao }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $descricao }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Modelo" class="control-label">Modelo</label>
            <select for="Modelo" class="form-control js-example-basic-single" name="modelo" required>
                @foreach ($modelo_list as $item => $descricao)
                    @if(isset($registro->Modelo->id))
                        @if ($item == $registro->Modelo->id)
                            <option value="{{ $item }}" selected>{{ $descricao }}</option>
                        @else
                            <option value="{{ $item }}">{{ $descricao }}</option>
                        @endif
                    @else
                        <option value="{{ $item }}">{{ $descricao }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Peso" class="control-label">Peso</label>
            <input for="Peso" class="form-control peso" type="text" name="peso" value="{{ isset($registro->peso) ? $registro->peso : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Valor" class="control-label">Valor Unitário</label>
            <input for="Valor" class="form-control dinheiro" type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}" required/>
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
    <div class="box-header with-border"> 
        <h3 class="box-title">Código de Barra</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            @if(isset($registro->codigo_barra))
                                <img src="data:image/png;base64,{{ $registro->codigo_barra }}" />
                            @endif
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>