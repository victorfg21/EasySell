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
            <label for="Categoria" class="control-label">Categoria</label>
            <select for="Categoria" class="form-control" name="categoria" required>
                @foreach ($categoria_list as $item => $descricao)
                    @if ($item == $registro->Categoria->id)
                        <option value="{{ $item }}" selected>{{ $descricao }}</option>
                    @else
                        <option value="{{ $item }}">{{ $descricao }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Marca" class="control-label">Marca</label>
            <input for="Marca" class="form-control" type="text" name="marca" value="{{ isset($registro->marca) ? $registro->marca : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Tipo" class="control-label">Tipo</label>
            <input for="Tipo" class="form-control" type="date" name="tipo" value="{{ isset($registro->tipo) ? $registro->tipo : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Modelo" class="control-label">Modelo</label>
            <input for="Modelo" class="form-control" type="text" name="modelo" value="{{ isset($registro->modelo) ? $registro->modelo : '' }}"/>
        </div>
        <div class="form-group">
            <label for="Peso" class="control-label">Peso</label>
            <input for="Peso" class="form-control" type="text" name="peso" value="{{ isset($registro->peso) ? $registro->peso : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Valor" class="control-label">Valor Unitário</label>
            <input for="Valor" class="form-control" type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Valor" class="control-label">Valor Unitário</label>
            <input for="Valor" class="form-control" type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}" required/>
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